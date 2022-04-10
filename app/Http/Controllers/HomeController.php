<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use TCG\Voyager\Facades\Voyager;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard. 
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Voyager::model('Post')->get();
        $categories = Voyager::model('Category')->get();

       return view('home',compact('posts','categories')); 
    }
}
 