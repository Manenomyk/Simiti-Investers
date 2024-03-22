<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function store(Request $request){
        $request->my_file->store('Uploads');
        $request->validate([
        'title'=>'required|string|255',
        'content1'=>'required|string',
        'image1'=>'required',
        'content2'=>'nullable|string',
        'image2'=>'nullable',
        'content3'=>'nllable|string',
        'video1'=>'nullable',
        'video2'=>'nullable',
        'profile'=>'required',
        'about'=>'required|string',
        ]);

        $blo = new Blogs();
        $blo -> title=$request->input('title');
        $blo -> content1=$request->input('content1');
        $blo -> image1=$request->input('image1');
        $blo -> content2=$request->input('content2');
        $blo -> image2=$request->input('image2');
        $blo -> content3=$request->input('content3');
        $blo -> video1=$request->input('video1');
        $blo -> video2=$request->input('video2');
        $blo -> profile=$request->input('profile');
        $blo -> about=$request->input('about');
        $blo->save();
        return back();
    }
}
