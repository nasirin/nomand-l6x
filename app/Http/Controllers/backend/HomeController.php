<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackages;
use App\Transaction;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.pages.home', [
            'travel_package' => TravelPackages::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status','SUCCESS')->count()
        ]);
    }
}
