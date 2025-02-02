<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZebrasChildController extends Controller
{
    public function index(){
        return view('ui_components/zebras');
    }
}
