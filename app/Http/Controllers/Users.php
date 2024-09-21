<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function login()
    {
        return view('loginpage');
    }
}
