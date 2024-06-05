<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resepsionis\HomeController; 


Route::get('/', 'HomeController@index')->name('dashboard');