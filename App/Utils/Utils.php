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

    public static function sanitize(string $str):string {
    return 
        htmlspecialchars(strip_tags(trim($str)), ENT_COMPAT);
    }
}