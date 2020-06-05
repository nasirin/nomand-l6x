<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\TravelPackages;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackages::with('galleries')->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.detail',[
            'item' => $item
        ]);
    }
}
