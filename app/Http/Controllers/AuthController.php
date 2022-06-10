<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('page.auth.main');
    }
    public function register()
    {
        return view('page.auth.register');
    }
}
