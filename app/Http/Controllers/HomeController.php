<?php

namespace App\Http\Controllers;

use App\Models\coach;
use App\Models\sport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $sports =sport::get();
        $coaches=coach::get();
        return view('home',get_defined_vars());
    }
}
