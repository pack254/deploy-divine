<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', 'PageContorller@homePage');
Route::get('/saleMember', 'PageContorller@saleMemberPage');
Route::get('/orderDetail', 'PageContorller@orderDetailPage');
Route::get('/contact', 'PageContorller@contactPage');
Route::get('/about', 'PageContorller@aboutPage');

Route::post('/customerSendMail', 'EmailController@email');
