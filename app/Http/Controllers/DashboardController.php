<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): ?\Inertia\Response
    {
        $data = User::count();
        $suppliers = Suppliers::count();
        $categories = Categories::count();
        $blogs = Blogs::count();
        dd($blogs);
        return Inertia::render('/Dashboard', compact('data', 'suppliers', 'categories', 'blogs'));
        // if (Auth::user()->id == 1) {
        //     return Inertia::render('/admin');
        // }
        // else {
        //     return Inertia::render('/Dashboard');
        // }
    }
}
