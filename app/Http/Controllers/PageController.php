<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();
        $projects = Project::latest()->get();
        $formations = Formation::get();


        return view("pages.homes.index", compact("posts", "projects", "formations"));
    }

    public function contact()
    {
        return view("pages.contacts.index");
    }

    public function formation()
    {
        $formations = Formation::get();
        return view("pages.formations.index", compact("formations"));
    }

    public function about()
    {
        return view("pages.abouts.index");
    }

    public function projet()
    {
        $projects = Project::latest()->get();

        return view("pages.portofolios.index", compact("projects"));
    }
}
