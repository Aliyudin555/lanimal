<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HawkChildController extends Controller
{
    public function index(){
        return view('ui_components/hawk');
    }
}

