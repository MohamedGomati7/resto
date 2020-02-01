<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\cart_item;
use App\order;
use App\order_item;



class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate
      $user = auth('web')->user();

    

      $item = new cart_item;
      $item->quantity = request('quantity');
      $item->meal_id = request('meal_id') ;
      $item->user_id = $user->id;


      $item->save();
     return redirect()->back();
    }

    public function checkout()
    {
        $user = auth('web')->user();

        $order = new order;
        $order->user_id = $user->id;
        $order->save();
        foreach(auth()->user()->cart_items as $cart_item) {
            $new_order_item = new order_item;
            $new_order_item->meal_id = $cart_item->meal_id;
            $new_order_item->quantity = $cart_item->quantity;
            $new_order_item->sold_price = meal::find($cart_item->meal_id)->price;

            $order->order_items()->save($new_order_item);

            
        }
        auth()->user()->cart_items()->delete();
        return redirect('/');
    }

    public function index()
    {
       $cart_items = auth()->user()->cart_items;
       return view('meal.cart')->with('cart_items', $cart_items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
