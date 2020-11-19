<?php

class Database {
    public static function connect(){
        $db = new mysqli('localhost', 'BryanAlex', 'bryan1993.', 'tienda_master');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}

