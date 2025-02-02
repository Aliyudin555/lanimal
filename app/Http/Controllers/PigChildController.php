<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PigChildController extends Controller
{
    public function index(){
        return view('ui_components/pig');
    }
}
