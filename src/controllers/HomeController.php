<?php

namespace Controllers;

use Models\Feautures;
use Models\Pricing;
use Models\Testimonial;

class HomeController {

    public function index()
    {
        $features = Feautures::all();
        $pricing = Pricing::all();
        $testimonials = Testimonial::all();

        echo view('home.index', [
            'features' => $features,
            'pricing' => $pricing,
            'testimonials' => $testimonials
        ]);
    }
}