<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function store( Request $request){
        $request->validate([
            'name'=> 'required | string | max:255',
            'email'=> 'required|email | string | max:30',
            'gender'=> 'required',
            'location'=> 'required',
            'region'=> 'required',
            'photo'=> 'nullable',
            'phone'=> 'required',
            'category'=> 'required',
            'sub_category'=> 'nullable',
            'annual_turnover'=> 'nullable',
            'boost'=> 'nullable',
            'comment'=> 'nullable',
        ]);

        $biz = new Suppliers();
        $biz -> name = $request->input('name');
        $biz -> email = $request->input('email');
        $biz -> gender = $request->input('gender');
        $biz -> location = $request->input('location');
        $biz -> region = $request->input('region');
        $biz -> photo = $request->input('photo');
        $biz -> phone = $request->input('phone');
        $biz -> category = $request->input('category');
        $biz -> sub_category = $request->input('sub_category');
        $biz -> annual_turnover = $request->input('annual_turnover');
        $biz -> boost = $request->input('boost');
        $biz -> comment = $request->input('comment');
        $biz->save();
        // return to_route('RegisterBusiness')->with('plus', 'supplier saved!');
        return back()->with('plus', 'Saved!');
    }
}
