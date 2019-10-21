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
    $time_sql = DB::select('select NOW() as current_time');
    $current_db_time = current($time_sql)->current_time;

    $dt = new DateTime($current_db_time);

    return view('welcome')->with(['current_time' => $dt->format('c')]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
