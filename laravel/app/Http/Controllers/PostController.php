<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
        $post = \App\Post::findOrFail($id);
        $this->authorize('view', $post);

        return view('post_show', compact('post'));
    }
}
