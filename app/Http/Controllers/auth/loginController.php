<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function TampilanloginMahasiswa()
    {
        return view('Auth.user.loginUser');

    }
    public function LoginMahasiswa(Request $request)
    {
        $request->validate([
            'npm' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('mahasiswa')->attempt(['npm' => $request->npm, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }





    public function loginAdmin()
    {
        return view('Auth.admin.loginAdmin');
    }
}
