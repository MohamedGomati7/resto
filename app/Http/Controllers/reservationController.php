<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;

class reservationController extends Controller
{
    public function index(){
        return view('reservation');
    }


    public function store(){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNum'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
            'personalNum'=> 'required'
            
        ]);
        
        $re= new reservation;
        $re->email = request('email');
        $re->name = request('name');
        $re->phoneNum = request('phoneNum');
        $re->date = request('date');
        $re->time = request('time');
        $re->personalNum = request('personalNum');
        $re->save();   
        error_log('Some message here.');
        //  return redirect('/');
    }

    
}
