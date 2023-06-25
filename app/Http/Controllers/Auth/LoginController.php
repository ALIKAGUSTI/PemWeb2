<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    // memnaggil form login
    function index()
    {
        return view('pages.auth.login');
    }

    // memproses login
    function login(Request $request)
    {
        //validasi user
        $validatedLogin = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        //proses login, cek didatabase 
        if(Auth::attempt($validatedLogin)){
            //redirect
            return redirect()->to('/merk');
        }else{
            return redirect()->back();
        }
    }
    function logout(Requset $request)
    {
        Auth::logout();
        $request::session()->invalidate();
        $request::session()->regenareteToken();
        return redirect()->to('/login');
    }
}
