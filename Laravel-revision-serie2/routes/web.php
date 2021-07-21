<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view1;
use App\Http\Controllers\view2;
use App\Http\Controllers\view3;
use App\Http\Controllers\Exo7;

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
    return view('template.main');
});
Route::get('/view1',[View1::class, 'index'])-> name('view1');

Route::get('/view2', [View2::class, 'index'])-> name('view2');

Route::get('/view3', [View3::class, 'index'])-> name('view3');

Route::get('/exo7', [Exo7::class, 'index']) -> name('exo7');