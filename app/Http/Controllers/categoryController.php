<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function create(){
        return view ('category.create');
    }



        public function store(){
            request()->validate([
                'name' => 'required|unique:categories'
            ]);
    
            $cat= new category;
            $cat->name = request('name');
            $cat->save();   
             return redirect('/meals');
        }
}
