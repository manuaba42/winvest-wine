<?php

namespace App\Http\Controllers;

class ContractController extends Controller
{
    public function index(){
        return view('contract_page.contract');
        // return(redirect('/user/contract'));
    }


}
