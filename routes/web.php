<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('view-data', 'AuthorizationController@viewData');
// Route::get('create-data', 'AuthorizationController@createData');
// Route::get('edit-data', 'AuthorizationController@editData');
// Route::get('update-data', 'AuthorizationController@updateData');
// Route::get('delete-data', 'AuthorizationController@deleteData');

Route::get("/menu","MenuController@index");
Route::get('/createuser', "CreateUserController@index");
Route::post('/regist', "CreateUserController@regist");

Auth::routes();
Route::get('/', 'HomeController@index');
Route::post('/bayar', 'BayarController@index');
Route::get('/tambahmenu', 'TambahMenuController@index');
Route::post('/tambahmenu', 'TambahMenuController@store');
