<?php

use Illuminate\Support\Facades\Route;


//Front
Route::get('/home', '\App\Http\Controllers\indexController@index')->name('front.index');
Route::post('/contactpost', '\App\Http\Controllers\indexController@contactPost')->name('front.contactpost');


//Login
Route::get('/login', '\App\Http\Controllers\loginController@login')->name('login');
Route::post('/giris', '\App\Http\Controllers\loginController@logingiris')->name('logingiris');


//Logout
Route::get('logout', '\App\Http\Controllers\loginController@logout')->name('logout');

Route::middleware('login')->group(function () {
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
Route::get('/admin/pricing', '\App\Http\Controllers\adminController@pricing')->name('admin.pricing');
Route::put('/admin/pricingUpdate', '\App\Http\Controllers\adminController@pricingUpdate')->name('admin.pricingUpdate');
Route::get('/admin/pricingbox1', '\App\Http\Controllers\adminController@pricingBox1')->name('admin.pricingbox1');
Route::put('/admin/pricingbox1Update', '\App\Http\Controllers\adminController@pricingBox1Update')->name('admin.pricingBox1Update');
Route::get('/admin/pricingbox2', '\App\Http\Controllers\adminController@pricingBox2')->name('admin.pricingbox2');
Route::put('/admin/pricingbox2Update', '\App\Http\Controllers\adminController@pricingBox2Update')->name('admin.pricingBox2Update');
Route::get('/admin/pricingbox3', '\App\Http\Controllers\adminController@pricingBox3')->name('admin.pricingbox3');
Route::put('/admin/pricingbox3Update', '\App\Http\Controllers\adminController@pricingBox3Update')->name('admin.pricingBox3Update');
Route::get('/admin/contact', '\App\Http\Controllers\adminController@contact')->name('admin.contact');
Route::get('/admin/contactPost/{id}', '\App\Http\Controllers\adminController@contactPost')->name('admin.contactPost');
Route::get('/admin/faq', '\App\Http\Controllers\adminController@faq')->name('admin.faq');
Route::put('/admin/faqUpdate', '\App\Http\Controllers\adminController@faqUpdate')->name('admin.faqUpdate');
Route::get('/admin/servicesbox1', '\App\Http\Controllers\adminController@servicesbox1')->name('admin.servicesbox1');
Route::get('/admin/servicesbox2', '\App\Http\Controllers\adminController@servicesbox2')->name('admin.servicesbox2');
Route::get('/admin/servicesbox3', '\App\Http\Controllers\adminController@servicesbox3')->name('admin.servicesbox3');
Route::put('/admin/servicesbox1Update', '\App\Http\Controllers\adminController@servicesbox1Update')->name('admin.servicesbox1Update');
});
