<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'BasicController@index');
Route::get('about-us', 'BasicController@about_us');
Route::get('service', 'BasicController@service');
Route::get('portfolio', 'BasicController@portfolio');
Route::get('blog', 'BasicController@blog');
Route::get('contact', 'BasicController@contact');


Route::get('register', 'BasicController@register');
Route::post('register', 'BasicController@register_submit');

Route::get('customers_list', 'BasicController@customers_list');

Route::get('products_list', 'BasicController@products_list');

