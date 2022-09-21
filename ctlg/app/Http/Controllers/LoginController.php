<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        // $request->all();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        return $request->all();
        // dd('sukses');
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return view('admin.dashboard');
        // }
        // return redirect(route('login'))->withErrors([
        //     "message" => "salah error cok asu!!",
        // ]);
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}