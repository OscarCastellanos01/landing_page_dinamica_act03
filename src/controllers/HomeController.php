<?php

namespace Controllers;

use Models\Feautures;

class HomeController {

    public function index()
    {
        $features = Feautures::all();

        echo view('home.index', [
            'features' => $features
        ]);
    }
}