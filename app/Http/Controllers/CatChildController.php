<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatChildController extends Controller
{
    public function index(){
        return view('ui_components/cat');
    }
}
