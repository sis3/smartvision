<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();
        $projects = Project::latest()->get();

        return view('pages.homes.index', compact('posts', 'projects'));
    }
}
