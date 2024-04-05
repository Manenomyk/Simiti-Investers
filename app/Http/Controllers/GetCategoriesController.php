<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Inertia\Inertia;

class GetCategoriesController extends Controller
{
    public function create()
    {
        
        $data = Categories::all();
        // dd($data);
        return Inertia::render('Categories', compact('data'));
  }
}
