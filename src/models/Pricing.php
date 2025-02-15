<?php

namespace Models;

use PDO; 
use App\Database;

class Pricing {

    public static function all()
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->query("
            SELECT 
                p.Pricing_Id,
                p.Pricing_Title,
                p.Pricing_Price,
                GROUP_CONCAT(f.PF_Feature SEPARATOR '|') AS Features
            FROM 
                TBL_PRICING p
            LEFT JOIN 
                TBL_PRICE_FEATURES f ON p.Pricing_Id = f.PF_IdPricing
            GROUP BY 
                p.Pricing_Id
            ORDER BY 
                p.Pricing_Id;
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}