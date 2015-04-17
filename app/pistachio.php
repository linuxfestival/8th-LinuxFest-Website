<?php

/**
 * @package Pistachio
 * @copyright (C) [pi0]
 * @license GNU/GPL, see LICENSE.gpl-2
 * @author Pooya parsa (pooya@pi0.ir)
 *
 * app is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 *app is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with app; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 * or see http://www.gnu.org/licenses/.
 */


use Monolog\Handler\StreamHandler;
use Monolog\Logger;


/** @var Monolog\Logger $log */
global $log;

function pistachio_init()
{
    global $log;

    //Setup logger
    $log = new Logger('app');
    $log->pushHandler(new StreamHandler(ROOT . '/app.log', Logger::DEBUG));

    parse_input();
//    minify();


    if (!insertView(PATH)) {
        header("HTTP/1.0 404 Not Found");
        if (!insertView('404'))
            echo('404 Not found - Pistachio');
        exit;
    }

}

function debug($message)
{
    global $log;
    $log->debug($message);
}


function pistachio_hash($password)
{
    return password_hash($password, PASSWORD_BCRYPT);
}


function isAjax()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        return true;
    return false;
}

function minify()
{
    ob_start(function ($html) {
        $html = preg_replace(array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s'), array('>', '<', '\\1'), $html);
        $html = preg_replace('/<!--[^\[](.*)-->/Uis', '', $html);
        return $html;
    });
}


function parse_input()
{
    //Routing stuff
    if (isset($_GET['q']))
        $uri = $_GET['q'];
    else
        $uri = $_SERVER['REQUEST_URI'];
    //remove base uri
    if (strpos($uri, BASE_URI) === 0)
        $uri = substr($uri, strlen(BASE_URI));
    //ignore parameters and invalid input
    $uri = preg_replace('/\?.*/', '', $uri);
    $uri = preg_replace('/[^a-zA-Z0-9\\.\\_\\/]/', '', $uri);
    //echo $uri
    define('PATH', $uri);

    //Get arguments
    define('LANG', getInput('l'));
}

function getInput($name)
{
    if (isset($_REQUEST[$name]))
        return $_REQUEST[$name];
    return null;
}

function getInputsWithKey($regex)
{
    $o = array();
    foreach ($_REQUEST as $key => $val) {
        if (preg_match("/$regex/", $key))
            $o[$key] = $val;
    }
    return $o;
}

function xss_clean($data)
{
// Fix &entity\n;
    $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do {
        // Remove really unwanted tags
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    } while ($old_data !== $data);

// we are done...
    return $data;
}

function get_view_path($view_name, $lang)
{
    if (!$lang)
        return ROOT . DS . VIEWS_DIR . DS . $view_name . '.' . VIEW_EXT;
    else
        return ROOT . DS . VIEWS_DIR . DS . $view_name . '.' . $lang . '.' . VIEW_EXT;
}

function insertView($view_name)
{
    if ($view_name == '' || $view_name == '/')
        $view_name = 'index';
    else if (preg_match('/\\/$/', $view_name)) {
        //First try without last slash
        $slash_removed = true;
        $view_name = substr($view_name, 0, strlen($view_name) - 1);
    }

    if (LANG) {
        $path = get_view_path($view_name, LANG);
        if (!file_exists($path))
            $path = get_view_path($view_name, null);
    } else
        $path = get_view_path($view_name, null);

    if (file_exists($path))
        include $path;
    else {
        if (isset($slash_removed))
            return insertView($view_name . '/index');

        if ($view_name != 'index') {
            //TODO : redirect to ./..
        }

        return false;
    }

    return true;
}

function viewUri($viewName)
{
    return BASE_URI . $viewName;
}

function redirect($uri)
{
    header('Location: ' . $uri);
    //TODO: also output javascript redirect
    die();
}

function assetURI($name, $type)
{
    $u = BASE_URI . ASSETS_DIR . DS . $type . DS . $name;

    $ver = filemtime(ROOT . DS . ASSETS_DIR . DS . $type . DS . $name);
    if ($ver)
        $u .= "?$ver";

    return $u;
}

function imgURI($name)
{
    return assetURI($name, 'images');
}

function img($name, $tags = '')
{
    $uri = imgURI($name);
    echo "<img src='$uri' $tags>";
}

function scriptUri($name)
{
    return assetURI($name, 'js');
}

function script($name)
{
    $uri = scriptUri($name);
    echo "<script type='application/javascript' src='$uri'></script>";
}

function cssUri($name)
{
    return assetURI($name, 'css');
}

function css($name)
{
    $uri = cssUri($name);
    echo "<link href='$uri' rel='stylesheet'>";
}

function uri($u, $force_lang = null)
{
    //Inject parameters
    $params = '';
    if (LANG || $force_lang)
        $params .= '&l=' . ($force_lang ? $force_lang : LANG);
    if ($params != '') {
        $p = strpos($u, '?');
        if ($p === false) {
            //no params
            $params = "?$params";
            $p = strpos($u, '#');
            if ($p === false)
                $p = strlen($u);
        }
        $u = substr($u, 0, $p) . $params . substr($u, $p);
    }

    return BASE_URI . $u;
}

function a($uri, $content, $tags = '', $force_lang = null)
{
    $uri = uri($uri, $force_lang);
    echo "<a href='$uri' $tags> $content </a>";
}

function get_dir()
{
    //TODO TODO
    if (LANG && LANG != 'fa')
        echo 'ltr';
    else
        echo 'rtl';
}

function get_align()
{
    //TODO TODO
    if (LANG && LANG != 'fa')
        echo 'left';
    else
        echo 'right';
}