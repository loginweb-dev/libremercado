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

// Route::get('/', function () {
//     return view('welcome');
//     return view('ecommerce1');
// });
Route::get('/', 'FrontEndController@default')->name('page_default');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('{page_id}/edit', 'PageController@edit')->name('page_edit'); 
    Route::post('/page/{page_id}/update', 'PageController@update')->name('page_update');
    Route::get('/page/{page_id}/default', 'PageController@default')->name('page_default'); 


    Route::get('{page_id}/index', 'BlockController@index')->name('block_index'); 
    Route::post('/block/update/{block_id}', 'BlockController@update')->name('block_update');
    Route::get('/block/delete/{block_id}', 'BlockController@delete')->name('block_delete');
    Route::get('/block/order/{block_id}/{order}', 'BlockController@block_ordering');

    Route::get('/block/move_up/{block_id}', 'BlockController@move_up')->name('block_move_up'); 
    Route::get('/block/move_down/{block_id}', 'BlockController@move_down')->name('block_move_down');

});

//---------- Products-----------------------------------------------
Route::get('product_view/{product_id}', 'FrontEndController@product_view')->name('product_view');
Route::get('product_stars/{product_id}/{stars}', 'FrontEndController@product_stars')->name('product_stars');

// Routes  Cart -----------------------------------------------------------------------
Route::get('ajax/cart/{slug}/{detail}', 'FrontEndController@addcart')->name('bg_ajax_addcart');
Route::get('ajax/subtract/{slug}/{detail}', 'FrontEndController@subtractcart')->name('bg_ajax_subtractcart');
Route::get('ajax/remove/{slug}/{detail}', 'FrontEndController@removecart')->name('bg_ajax_removecart');
Route::get('ajax/product_details/{id}', 'FrontEndController@productdetails')->name('bg_ajax_product_details');
Route::post('ajax/update/bussiness', 'FrontEndController@update_bussiness')->name('bg_ajax_update_bussiness');
Route::post('/save/location', 'FrontEndController@save_location')->name('bg_save_location');
Route::get('ajax/bg_regions/{id}', 'FrontEndController@regions_get')->name('bg_ajax_region_get');
Route::get('ajax/bg_delivery/{region_id}', 'FrontEndController@delivery_get')->name('bg_ajax_delivery_get');