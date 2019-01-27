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





Route::get('/cron','CrawlerController@cron');

Route::get('/', function(){
	return view('vendor.adminlte.login');
});
Auth::routes();

Route::post('/login', 'RoleController@check');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/load/{url}','CrawlerController@load');


Route::group(['prefix'=>'admin','middleware'=>'role'], function(){
Route::post('/load/store','CrawlerController@store');
Route::get('/', 'RoleController@index');
Route::get('/products','CrawlerController@index');
Route::get('/products/drop/{id}','CrawlerController@drop');
Route::get('/load','CrawlerController@load');
Route::get('/load/table','CrawlerController@table_list');

Route::get('/load/table/{id}','CrawlerController@table_list_price');


Route::get('/get/product/{id}','CrawlerController@get_report');
Route::get('/cron','CrawlerController@cron');
Route::get('/report/{id}','CrawlerController@get_report_price');

});

