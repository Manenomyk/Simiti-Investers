<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\LogisticServices;

class LogisticsController extends Controller
{
    public function index( ){
        $data = LogisticServices::all();
        return Inertia::render('ServiceProviders', compact('data'));
    }
}
