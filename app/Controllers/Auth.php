<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        echo "Reached login method";
        return view('login');
    }

    public function loginSubmit()
    {
        // Logika untuk memproses login
    }

    public function logout()
    {
        // Logika untuk logout
    }

    public function welcomeMessage()
    {
        return view('welcome_message');
    }
}
