<?php

namespace Models;

use PDO; 
use App\Database;

class Testimonial {

    public static function all()
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->query("SELECT * FROM TBL_TESTIMONIALS");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}