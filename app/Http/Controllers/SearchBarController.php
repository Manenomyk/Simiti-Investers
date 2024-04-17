<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Inertia\Inertia;

class SearchBarController extends Controller
{
    public function index()
    {
        
        $data = Categories::all();
        // dd($data);
        return Inertia::render('SearchBar', compact('data'))
            ->with('data', Categories::orderBy('updated_at', 'DESC')->get());
    }
}
