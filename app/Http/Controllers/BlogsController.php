<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blogs;
use Illuminate\Http\Request;


class BlogsController extends Controller
{
    public function index()
    {
        $data = Blogs::all();
        return Inertia::render('Blogs', compact('data'))
            ->with('data', Blogs::orderBy('updated_at', 'DESC')->get());
    }
}
