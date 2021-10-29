<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('personal');
});

Route::get('comments', 'GuestBookController@list');
Route::post('comment/store', 'GuestBookController@store');
