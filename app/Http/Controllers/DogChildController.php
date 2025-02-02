<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogChildController extends Controller
{
    public function index(){
        return view('ui_components/dog');
    }
}
