<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BearChildController extends Controller
{
    public function index(){
        return view('ui_components/beruang');
    }
}
