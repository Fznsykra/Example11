<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:4|confirmed',
            'captcha'=>'required|captcha'
        ]);
        user::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=>Hash::make($validated['password'])
        ]);
        return redirect()->route('login');
    }
}
