<?php

use App\Example;
use App\Container;
use App\Collaborator;
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

app()->singleton('App\Example', function(){
    return new Example();
});

Route::get('/', function () {
    $example1 = resolve('App\Example');
    $example2 = resolve('App\Example');
    dump($example1);
    dump($example2);
    return view('welcome');
});
