<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Tambahkan debugging
        echo "Reached login method";
        return view('login');
    }

    public function loginsubmit()
    {
        // Logika untuk memproses login
    }

    public function logout()
    {
        // Logika untuk logout
    }

    public function welcome_message()
    {
        return view('welcome_message');
    }
}
