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
Route::put('/heroUpdate', '\App\Http\Controllers\adminController@heroUpdate')->name('admin.heroUpdate');
Route::get('/admin/about', '\App\Http\Controllers\adminController@about')->name('admin.about');
Route::put('/admin/aboutUpdate', '\App\Http\Controllers\adminController@aboutUpdate')->name('admin.aboutUpdate');
Route::get('/admin/services', '\App\Http\Controllers\adminController@services')->name('admin.services');
Route::put('/admin/servicesUpdate', '\App\Http\Controllers\adminController@servicesUpdate')->name('admin.servicesUpdate');
Route::get('/admin/portfolio', '\App\Http\Controllers\adminController@portfolio')->name('admin.portfolio');
Route::put('/admin/portfolioUpdate', '\App\Http\Controllers\adminController@portfolioUpdate')->name('admin.portfolioUpdate');

