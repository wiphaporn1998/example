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
    return view('welcome');
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});
Route::get('/news', function () {
    return "ข่าว";
});
Route::get('/news/{id}', function ($id) {
    return "ข่าวที่ $id";
});
Route::get('/sum/{num1}/{num2}', function ($num1,$num2) {
    return "ผลรวมของเลข $num1 และ $num2 คือ " . ($num1 + $num2);
});
