<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Events\EvenetCreatePost;
use Illuminate\Support\Str;

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
    $post = Post::first();
    event(new EvenetCreatePost($post));
    return view('welcome');
});

Route::get('/create-post', function () {
    //$user = User::first();
    // $post = $user->posts()->create([
    //     'title' => Str::random(150),
    //     'body' => Str::random(400),
    // ]);
    $post = Post::first();
    event(new EvenetCreatePost($post));

    

    return "Criado com sucesso {$post}";
});

