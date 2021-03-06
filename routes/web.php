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

Route::get('/', function () {
    return view('layouts.main');
})->name('home');


Route::get('/comics', function () {
    $data = config('comics');
    return view('comics',['products'=>$data]);
})->name('comics');


Route::get('/comics/{id}', function ($id) {

    $data = config('comics');
    $product = $data[$id];
    

    return view('/comics-info',compact('product'));
})->name('comics-info');

