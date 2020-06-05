<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\TravelPackages;

class HomeController extends Controller
{
    public function index()
    {
        $item = TravelPackages::with(['galleries'])->get();
        return view('frontend.pages.home',[
            'item' => $item
        ]);
    }
}
