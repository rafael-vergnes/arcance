<?php

namespace Utils;

use PDO;

class Utils {
    public static function connect(): PDO {
        return new PDO(
            'mysql:host=' . \DB_HOST . ';dbname=' . \DB_NAME, \DB_USERNAME, \DB_PASSWORD,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}