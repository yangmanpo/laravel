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
//test控制器下的test方法
Route::get('admin/test/test','Admin\TestController@test');
//test控制器下的modelSel方法
Route::get('admin/test/modelSel','Admin\TestController@modelSel');
//Login控制器下的login方法
Route::any('admin/login/login','Admin\LoginController@login');