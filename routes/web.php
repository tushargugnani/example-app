<?php

use App\Example;
use App\Container;
use App\Models\Post;
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

Route::get('/posts', function(){
    $posts = Post::all();
    foreach($posts as $post){
        echo $post->comments;
    }
});
