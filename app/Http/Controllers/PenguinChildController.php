<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenguinChildController extends Controller
{
    public function index(){
        return view('ui_components/penguin');
    }
}
