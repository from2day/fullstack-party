<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\GitHub\Facades\GitHub;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(GitHub::me()->organizations());
        // we're done here - how easy was that, it just works!
        

        return view('home');
    }
}
