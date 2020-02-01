<?php

// Home Contoller

Route::get('/','indexController@index'); 

// About Controller


Route::get('/about','aboutController@index');

// Contact Controller

Route::get('/contact','contactController@index'); 
Route::post('/contact/send','contactController@send')->name('sendMessage');

// Menu Controller

// Route::get('/menu','menuController@index'); 

// Reservation Control
Route::get('/reservation','reservationController@index')->middleware(['auth', 'role:customer']); 
Route::POST('/reservation/store','reservationController@store')->name('reservation.store')->middleware(['auth', 'role:customer']);



// Category Controller
Route::get('/categories/create','categoryController@create')->middleware(['auth', 'role:admin']); 
Route::POST('/categories','categoryController@store')->middleware(['auth', 'role:admin']); 


// Meal Controller
Route::get('/meals','mealController@index'); 
Route::get('/meals/create','mealController@create')->middleware(['auth', 'role:admin']); 
Route::POST('/meals/store','mealController@store')->middleware(['auth', 'role:admin']); 
Route::get('/meals/{id}/edit' ,'mealController@edit')->middleware(['auth', 'role:admin']);
Route::PATCH('/meals/{id}' ,'mealController@update')->middleware(['auth', 'role:admin']);
Route::delete('/meals/{id}'   ,'mealController@destroy')->middleware(['auth', 'role:admin']);


//customer login
Route::get('/customer/login' ,'customerLoginController@showLoginForm');
Route::post('/customer/login' ,'customerLoginController@login');


Route::get('/profile','profileController@show');
Auth::routes();

Route::post('/cart-items', 'CartItemController@store');
Route::get('/cart-items/checkout', 'CartItemController@checkout');

Route::get('/cart-items', 'CartItemController@index');
