<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Slider;
use App\Partenaires;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $partenaires = Partenaires::all();
        $categories = Category::all();
        $items = Item::all();
        return view('welcome',compact('sliders','categories','items','partenaires'));
    }
}
