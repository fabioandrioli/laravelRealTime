<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\EventCreatePost;

class SiteController extends Controller
{
    public function index(){

        $post = Post::first();
        event(new EventCreatePost($post));
        return view('welcome');
    }
}
