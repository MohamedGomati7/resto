<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meal;
use App\category;


class mealController extends Controller
{
    public function index(){


        return view('meal.index', [
            'categories' => category::with('meals')->get()
        ]);

    }
    public function store(){
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'details'=>'required',
            'image' => 'required|image',
            'category' => 'required|exists:categories,id'
        ]);

        $meal = new meal;

        $meal->name= request('name');
        $meal->price=request('price');
        $meal->details=request('details');
        $image_path = request()->file('image')->store('public');
        $meal->image = str_replace('public/','',$image_path);

        $category_id = request('category');
        category::find($category_id)->meals()->save($meal);
      
        return redirect('/meals'); 
    }

    public function create()
    {
        return view('meal.create', [
           
            'categories' => category::all()
        ]);
    }

    public function edit($id)
    {
        return view('meal.edit',  [
            'categories' => category::all(),
            'meal' => meal::find($id)
        ]);
    } 
    
    public function update($id)
    {
        $meal = meal::find($id);

        if(request()->file('image'))
        {
            $newPath = request()->file('image')->store('public');
            $meal->image = str_replace('public/','',$newPath);
        }
        $meal->name= request('name');
        $meal->price=request('price');
        $meal->details=request('details');
        $category_id = request('category');
        category::find($category_id)->meals()->save($meal);
      
        return redirect('/meals'); 
    }

    public function destroy($id)
    {
        
        meal::find($id)->delete();
        return redirect('/meals');
    }

}
