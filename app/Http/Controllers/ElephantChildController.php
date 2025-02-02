<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElephantChildController extends Controller
{
    public function index(){
        return view('ui_components/elephant');
    }
}
