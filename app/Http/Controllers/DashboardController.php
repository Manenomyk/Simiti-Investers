<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): ?\Inertia\Response
    {
        if (Auth::user()->id == 1) {
            return Inertia::render('/admin');
        }
        else {
            return Inertia::render('/Dashboard');
        }
    }
}
