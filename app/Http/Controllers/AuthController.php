<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function forgotPass(){
        return view('auth.forgot_pass');
    }
    
    public function login_process(Request $request){
        // dd($request->all());
        $request -> validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $data=[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return(redirect('/user/dashboard'));
        }else{
            return(redirect('/login')->with('failed', 'Email or Password wrong'));
        }
    }
    
    public function logout(){
        // dd('oke');
        Auth::logout();
        return(redirect('/login')->with('success', 'Success logout'));

    }

    public function register_process(Request $request){
        dd($request->all());
    }
    
}
