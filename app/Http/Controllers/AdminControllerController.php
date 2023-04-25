<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControllerController extends Controller
{
    //
    public function admin()
    {
        return view('admin_creer-vente');
    } 

    public function dash()
    {
        return view('admin_dash');
    } 

    public function admin_loc()
    {
        return view('admin_creer-location');
    } 

    public function admin_vente_list()
    {
        return view('admin_vente-list');
    } 

    public function admin_location_list()
    {
        return view('admin_location-list');
    } 





}
