<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Login function Page
    public function LoginPage(){
        return view("page.auth.login");
    }
    public function RegisterPage(){
        return view("page.auth.register");
    }
}
