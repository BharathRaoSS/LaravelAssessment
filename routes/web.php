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
    return view('welcome');
});
Route::get('/enter_material','MaterialController@index');
Route::post('/enter_material','MaterialController@post_material');
Route::get('/display_materials','MaterialController@display_materials');
Route::get('/edit_material/{id}','MaterialController@edit_material');
Route::post('/edit_material/{id}','MaterialController@edit_material_post');
Route::get('/delete_material/{id}','MaterialController@delete_material');
Route::post('/owner_signup','MaterialController@owner_signup');


