<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index( ){
        $data = Categories::all();
        return Inertia::render('Categories', compact('data'));
    }
}
