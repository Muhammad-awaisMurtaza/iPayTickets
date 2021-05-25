<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','RoutesController@index');
Route::get('/home','RoutesController@home')->name('home');
Route::get('/reminder','RoutesController@reminder')->name('reminder');
Route::get('/payTickets','RoutesController@payTickets');
Route::get('/faq','RoutesController@faq');
Route::get('/login','RoutesController@login');
Route::get('/signup','RoutesController@signup');
Route::post('/payNow','RoutesController@payNow');


Route::get('logout','LoginController@logout');
Route::post('/signin','LoginController@index');


Route::post('/register','SignUpController@index');

Route::get('/verify/{id}/{email}','VerificationController@index');

Route::post('searchTicket','TicketController@searchTicket');
Route::get('addTicket/{id}','TicketController@add');


Route::post('saveTicketNotification','TicketNotificationController@index');

Route::post('saveNotification','NotificationController@index');


Route::get('/admin', function () {return view('admin.index3');});


