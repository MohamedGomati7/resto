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

// Reservation Controller

Route::get('/reservation','reservationController@index'); 
Route::POST('/reservation/store','reservationController@store')->name('reservation.store');



// Category Controller

Route::get('/categories/create','categoryController@create')->middleware('auth'); 
Route::POST('/categories','categoryController@store')->middleware('auth'); 


// Meal Controller
Route::get('/meals','mealController@index'); 

Route::get('/meals/create','mealController@create')->middleware('auth'); 
Route::POST('/meals/store','mealController@store')->middleware('auth'); 
Route::get('/meals/{id}/edit' ,'mealController@edit')->middleware('auth');
Route::PATCH('/meals/{id}' ,'mealController@update')->middleware('auth');
Route::delete('/meals/{id}'   ,'mealController@destroy')->middleware('auth');



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
