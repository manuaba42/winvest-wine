<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return view('profile.transaction_list');
        // return(redirect('/user/transaction-list'));
    }
}
