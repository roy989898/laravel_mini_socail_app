<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLoginController extends Controller
{
    //

    public function login(Request $request)
    {

    }

    public function logout()
    {

    }

    public function showLoginPage()
    {

        return view('login');

    }
}
