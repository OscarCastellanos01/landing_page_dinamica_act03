<?php

namespace Controllers;

class HomeController {

    public function index()
    {
        echo view('home.index');
    }
}