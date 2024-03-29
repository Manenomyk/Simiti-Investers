<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierSearchController extends Controller
{
    public function index(Request $request)
    {
        $data = Suppliers::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('category', 'LIKE', "%{$search}%");
            })->get();
            
        return inertia('Search/index', compact('data'));
    }
}
