<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(9); // 9 projets par page

        return view('pages.portfolios.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('pages.portfolios.show', compact('project'));
    }
}
