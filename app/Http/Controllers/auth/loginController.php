<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function loginUser()
    {
        return view('Auth.user.loginUser');
    }
    public function loginAdmin()
    {
        return view('Auth.admin.loginAdmin');
    }
}
