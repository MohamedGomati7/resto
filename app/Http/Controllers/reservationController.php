<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index(){
        return view('reservation');
    }
}
