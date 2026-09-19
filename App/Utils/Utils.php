<?php

namespace Utils;

use PDO;

class Utils{
    public static function connect():PDO{
        return new PDO('mysql:host='.BDD_HOST.';dbname='.BDD_NAME.'','.BDD_USERNAME.','.BDD_PASSWORD.',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
};