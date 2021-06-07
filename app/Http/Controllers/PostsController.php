<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create() {
        return view('posts/create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required',
            'image' => ['required', 'image'],
        ]);

        auth()->user()->User::posts()->create($data);

        \App\Models\Post::create($data);

        dd(request()->all());
    }
}
