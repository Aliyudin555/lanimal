<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeChildController extends Controller
{
    public function index(){
        return view('ui_components/snake');
    }
}
