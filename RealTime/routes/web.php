<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Events\EventCreatePost;
use Illuminate\Support\Str;
use App\Http\Controllers\SiteController;

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

Route::get('/',[SiteController::class,'index']);

Route::get('/create-post', function () {

    $post = Post::first();
    event(new EventCreatePost($post));

    

    return "Criado com sucesso";
});

