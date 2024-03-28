<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Suppliers;
use App\Models\Categories;
use Illuminate\Http\Request;

use function Termwind\render;
use App\Models\PendingSuppliers;

class BusinessController extends Controller
{
    public function index(){
        $data = Suppliers::all();
        return inertia('Business/index', compact('data'));
    }
    public function show(string $id){
        $data = Suppliers::where('id', $id)->first();
        dd($data);
        return inertia('Business/show', compact('data'));
    }
    public function create(){
        return Inertia::render('Business/store');
    }
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

        $biz = new PendingSuppliers();
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
        return view('/RegisterBusiness');
    }

    public function edit(string $id){
        $data = Suppliers::where('id', $id)->first();
        return inertia('Business/update', compact('data'));
    }
    public function update( Request $request, string $id){
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
        $biz = Suppliers::where('id', $id)->first();

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
        return to_route('biz.index')->with('plus', 'supplier saved!');
        // return view('/RegisterBusiness');
        
    }
    public function delete(string $id){
        $data = Suppliers::where('id', $id)->first();
        $data->delete();
        // return inertia('Business/update', compact('data'));
        return to_route('biz.index')->with('plus', 'supplier delete!');

    }
}
