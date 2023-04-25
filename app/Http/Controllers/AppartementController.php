<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    //
    public function Details()
    {
        return view('details');
    }
}
