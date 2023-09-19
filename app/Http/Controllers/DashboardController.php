<?php

namespace App\Http\Controllers;

use App\Models\WineInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $data_wine = WineInvoice::with('invoice.investor')->whereHas('invoice.investor', function ($query) use ($userId) {
                $query->where('id', $userId);
            })->get();
            
        return view('welcome')->with('data_wine', $data_wine);

        // return redirect('/user/dashboard')->with('data_wine', $data_wine);
    }
}
