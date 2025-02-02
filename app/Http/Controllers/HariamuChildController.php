<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HariamuChildController extends Controller
{
    //index
    public function index(){
        return view('ui_components/harimau');
    }
}
