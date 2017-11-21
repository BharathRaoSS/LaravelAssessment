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
Route::get('/owner_signup','MaterialController@owner_signup');
Route::post('/owner_signup','MaterialController@post_owner_signup');
Route::get('/status','MaterialController@status');
Route::get('/owner_login','MaterialController@owner_login');
Route::post('/owner_login','MaterialController@post_owner_login');






