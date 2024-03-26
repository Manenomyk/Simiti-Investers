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
        // dd($data);
        return Inertia::render('Blogs', compact('data'))
            ->with('data', Blogs::orderBy('updated_at', 'DESC')->get());
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content1'=>'required',
            'image1'=>'required|mimes:jpg,png,jpeg|max:5048',
            'content2'=>'nullable',
            'image2'=>'nullable|mimes:jpg,png,jpeg,webp|max:5048',
            'content3'=>'nullable',
            'video1'=>'nullable',
            'video2'=>'nullable',
            'profile'=>'required|mimes:jpg,png,jpeg|max:5048',
            'about'=>'required',
        ]);

        $newimage = uniqid() . '.' . $request->image1->extension(); 
        $request ->image1->move(public_path('images'), $newimage);
        dd($newimage);
        $newimage1 = uniqid() . '.' . $request->image2->extension(); 
        $request ->image1->move(public_path('images'), $newimage1);
    }
}
