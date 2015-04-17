<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('VIEWS_DIR','views');
define('APP_DIR','app');
define('ASSETS_DIR','assets');
define('VIEW_EXT','php');

require_once 'vendor/autoload.php';

require_once APP_DIR . DS . 'config.php';

require_once APP_DIR . DS . 'app.php';

require_once APP_DIR . DS . 'pistachio.php';

pistachio_init();