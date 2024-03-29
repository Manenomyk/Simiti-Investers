<?php

namespace App\Http\Controllers;

use App\Models\SupplierSearch;
use Illuminate\Http\Request;

class SupplierSearchController extends Controller
{
    public function index(Request $request){
        $report = SupplierSearch::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('category', 'LIKE', "%{$search}%");
            });
    }
}
