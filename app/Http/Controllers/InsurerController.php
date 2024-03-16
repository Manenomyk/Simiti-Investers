<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\InsuranceServices;

class InsurerController extends Controller
{
    public function index( ){
        $data = InsuranceServices::all();
        return Inertia::render('Categories', compact('data'));
    }
}
