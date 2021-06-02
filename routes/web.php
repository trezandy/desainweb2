<?php

use App\Http\Controllers\PostController;
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

Route::get('', 'HomeController@index');
Route::get('/create', 'HomeController@create');
Route::post('/create', 'HomeController@store');
Route::get('/edit/1', 'HomeController@edit');
Route::post('/edit/1', 'HomeController@update');


Route::get('/about', function () {
    $title = 'About';
    $firstName = '';
    $lastName = '';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $title = 'Contact';
    return view('contact', compact('title'));
});

Route::get('/login', function () {
    $title = 'Login';
    return view('login', compact('title'));
});

Route::get('/post/{slug}', 'PostController@show');
