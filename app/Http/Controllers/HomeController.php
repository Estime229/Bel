<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function acheter()
    {
        return view('acheter');
    }

    public function louer()
    {
        return view('louer');
    }

    public function apropos()
    {
        return view('apropos');
    }
    public function contact()
    {
        return view('contact');
    }

}
