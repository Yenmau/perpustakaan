<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    function index() {
        return view('login.index');
    }

    function login(Request $request) {

        $validasi = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect('login')
            ->withErrors($validasi)
            ->withInput();
        }

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect('dashboard')->with(['success' => 'Selamat Anda Berhasil Login!']);;
        }else {
            return redirect('login')->withErrors('Email atau Password yang anda input salah');
        }
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }
}
