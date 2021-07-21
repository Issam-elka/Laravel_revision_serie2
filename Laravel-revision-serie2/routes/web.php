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
    return view('template.main');
});
Route::get('/view1', function () {
    return view('pages.view1');
})-> name('view1');
Route::get('/view2', function () {
    return view('pages.view2');
})-> name('view2');
Route::get('/view3', function () {
    return view('pages.view3');
})-> name('view3');

