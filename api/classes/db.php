<?php
require_once(ROOT_PATH."/config.php");
class DB {
    public static function connect(){
        return new PDO("mysql:host="._HOST.";port="._DB_PORT.";dbname="._DB_NAME, _DB_USER, _DB_PASSWORD);
    }
}