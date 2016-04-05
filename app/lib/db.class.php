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

class DB
{
    static $db ;

    /**
     * @return FluentPDO
     */
    private static function  getdb()
    {
        if (self::$db == null)
            self::$db = new FluentPDO(new PDO(
                'mysql:dbname=' . MYSQL_DBNAME.';charset=utf8', MYSQL_USERNAME, MYSQL_PASSWORD));
        return self::$db;
    }


    /** Create SELECT query from $table
     * @param string $table db table name
     * @param integer $primaryKey return one row by primary key
     * @return \SelectQuery
     */
    public static function from($table, $primaryKey = null)
    {
        return self::getdb()->from($table, $primaryKey);
    }


    /** Create UPDATE query
     *
     * @param string $table
     * @param array|string $set
     * @param string $primaryKey
     *
     * @return \UpdateQuery
     */
    public static function update($table, $set = array(), $primaryKey = null) {
        return self::getdb()->update($table,$set,$primaryKey);
    }

    /** Create INSERT INTO query
     *
     * @param string $table
     * @param array $values  you can add one or multi rows array @see docs
     * @return \InsertQuery
     */
    public static function insertInto($table, $values = array()) {
        return self::getdb()->insertInto($table,$values);
    }

}
