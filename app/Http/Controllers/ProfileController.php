<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.profile');
        // return(redirect('/user/profile'));
    }


}
