<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        return view('ui_components/animal');
    }
}
