<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.list_wine');
    }
    public function detailWine(){
        return view('product.detail_wine');
    }
}
