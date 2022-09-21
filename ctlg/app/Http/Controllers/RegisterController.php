<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'username'     =>   'required',
            'password'     =>   'required|min:6'
        ]);

        // $data = $request->all();
        return $request->all();
        // User::create([
        //     'name'  =>  $data['name'],
        //     'email' =>  $data['email'],
        //     'email_verified_at' => date('Y-m-d H:i:s', time()),
        //     'username' =>  $data['username'],
        //     'password' => Hash::make($data['password'])
        // ]);

        return redirect('/')->with('success', 'Registration Completed, now you can login');
    }
}