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

Route::get('/', 'contactController@main');
Route::get('/add', 'contactController@hangingOutAddForm');
Route::get('/contact/{id}', 'contactController@aboutContact');
Route::get('/contact/{id}/edit', 'contactController@hangingOutEditForm');

Route::post('/add', 'contactController@addContact');
Route::post('/contact/{id}/edit', 'contactController@editContact');
Route::get('/contact/{id}/delete', 'contactController@deleteContact');

Route::get('/contact/{contact_id}/add_phone', 'phoneController@addForm');
Route::post('/contact/{contact_id}/add_phone', 'phoneController@add');
Route::get('/phone/{id}/delete', 'phoneController@delete');

Route::get('/contact/{contact_id}/add_website', 'webSiteController@addForm');
Route::post('/contact/{contact_id}/add_website', 'webSiteController@add');
Route::get('/webSite/{id}/delete', 'webSiteController@delete');
