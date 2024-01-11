<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signUp extends Controller
{
    public function signUp()
    {
        return view('Auth.signUp');
    }
}
