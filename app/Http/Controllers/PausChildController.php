<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PausChildController extends Controller
{
    public function index(){
        return view('ui_components/paus');
    }
}
