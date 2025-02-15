<?php

namespace Models;

use PDO; 
use App\Database;

class Feautures {

    public static function all()
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->query("SELECT * FROM TBL_FEATURES");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}