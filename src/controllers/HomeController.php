<?php

namespace Controllers;

use Models\Feautures;
use Models\Pricing;

class HomeController {

    public function index()
    {
        $features = Feautures::all();
        $pricing = Pricing::all();

        echo view('home.index', [
            'features' => $features,
            'pricing' => $pricing
        ]);
    }
}