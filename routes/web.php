<?php

// Home Contoller

Route::get('/','indexController@index'); 

// About Controller

Route::get('/about','aboutController@index');

// Contact Controller

Route::get('/contact','contactController@index'); 

// Menu Controller

Route::get('/menu','menuController@index'); 

// Reservation Controller

Route::get('/reservation','reservationController@index'); 




Route::get('/', function () {
    return view('welcome');
});
