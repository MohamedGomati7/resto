<?php

// Home Contoller

Route::get('/','indexController@index'); 

// About Controller

Route::get('/about','aboutController@index');

// Contact Controller

Route::get('/contact','contactController@index'); 

// Menu Controller

// Route::get('/menu','menuController@index'); 

// Reservation Controller

Route::get('/reservation','reservationController@index'); 


// Category Controller

Route::get('/categories/create','categoryController@create'); 
Route::POST('/categories','categoryController@store'); 


// Meal Controller
Route::get('/meals','mealController@index'); 

Route::get('/meals/create','mealController@create'); 
Route::POST('/meals/store','mealController@store'); 
Route::get('/meals/{id}/edit' ,'mealController@edit');
Route::PATCH('/meals/{id}' ,'mealController@update');
Route::delete('/meals/{id}'   ,'mealController@destroy');






// Route::get('/', function () {
//     return view('welcome');
// });
