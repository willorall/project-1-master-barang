<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\itemcontroller;
use App\Http\Controllers\mastercontroller;
use App\Http\Controllers\prosescontroller;

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
Route::get('/test', function () {
    return view('test');
});
route::resource('/items', itemcontroller::class);
route::get('/master/add', [mastercontroller::class,'add']);
route::get('/master/destroy/{id}', [mastercontroller::class,'destroy']);
route::post('/master/add', [mastercontroller::class,'addupdate']);
route::resource('/master', mastercontroller::class);
route::resource('/proses', prosescontroller::class);