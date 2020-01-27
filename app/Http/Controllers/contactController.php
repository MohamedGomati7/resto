<?php

namespace App\Http\Controllers;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request){
        request()->validate($this->rules());
        $data = array('email'    => $request->email,
                      'subject'  => $request->subject,
                      'message'  => $request->message);
  
                      Mail::to('mohamedgomati99@gmail.com')->send(new sendmail($data));
                      return back()->with('success','Thank you for Contacting us!');
      }
  
      public function rules(){
        return [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
      }
}
