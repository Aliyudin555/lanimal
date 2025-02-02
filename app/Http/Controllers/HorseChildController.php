<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorseChildController extends Controller
{
    public function index(){
        return view('ui_components/horse');
    }
}
