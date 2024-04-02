<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Blogs;
use App\Models\Suppliers;
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
        $biz = new Blogs();
        $biz -> title = $request->input('title');
        $biz -> content1 = $request->input('content1');
        $biz -> content2 = $request->input('content2');
        $biz -> content3 = $request->input('content3');
        $biz -> video1 = $request->input('video1');
        $biz -> video2 = $request->input('video2');
        $biz -> profile = $request->input('profile');
       
        $path = $request->file('image1')->store('blogs', 'public');
        $biz->image1 = $path;
        $path = $request->file('image2')->store('blogs', 'public');
        $biz->image2 = $path;
        $path = $request->file('video1')->store('blogs', 'public');
        $biz->video1 = $path;
        $path = $request->file('video2')->store('blogs', 'public');
        $biz->video2 = $path;
        $biz->save();
        return back()->with('plus', 'supplier saved!');
    }
}
