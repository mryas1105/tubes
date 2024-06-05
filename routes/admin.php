<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController; 


Route::get('/', 'HomeController@index')->name('dashboard');