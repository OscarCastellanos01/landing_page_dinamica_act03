<?php

namespace Models;

use PDO; 
use App\Database;

class User {

    public static function all()
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}