<?php

namespace Controllers;

use Models\User;

class UserController {
    
    public function index()
    {
        $users = User::all();
        
        echo view('users.index', [
            'users' => $users
        ]);
    }
}