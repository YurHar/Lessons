<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TestController extends Controller
{
    public function getTableValues(){
        $post = Post::all();
        dd($post->toArray());
    }
}
