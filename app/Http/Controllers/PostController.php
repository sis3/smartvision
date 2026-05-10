<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Récupérer tous les posts avec pagination
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(6); // 6 posts par page

        return view('pages.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.posts.show', compact('post'));
    }
}
