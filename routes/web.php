<?php

use Illuminate\Support\Facades\Route;



//Front
Route::get('/home', '\App\Http\Controllers\indexController@index')->name('front.index');
Route::post('/contactpost', '\App\Http\Controllers\indexController@contactPost')->name('front.contactpost');

//Login
Route::get('/login', '\App\Http\Controllers\loginController@login')->name('login');

//Back
Route::get('/admin/home', '\App\Http\Controllers\adminController@index')->name('admin.index');
Route::get('/admin/hero', '\App\Http\Controllers\adminController@hero')->name('admin.hero');
Route::post('/admin/heroPost', '\App\Http\Controllers\adminController@heroPost')->name('admin.heropost');


