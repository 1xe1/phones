<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneCRUDController extends Controller
{
    // Create admin
    public function index()
    {
        $phones = Phone::paginate(6);
        return view('phones.index', compact('phones'));
    }

    public function admin()
    {
        $phones = Phone::orderBy('id', 'asc')->paginate(5);
        return view('phones.admin', compact('phones'));
    }
    public function show(){
        return view('phones.show');
    }

    public function create()
    {
        return view('phones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'storage_capacity' => 'required',
            'color' => 'required',
            'condition' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image_url' => 'required|url',
            'posted_date' => 'required|date',
            'seller_name' => 'required',
            'seller_email' => 'required|email',
            'seller_phone' => 'required',
        ]);

        $phone = new Phone;
        $phone->name = $request->input('name');
        $phone->brand = $request->input('brand');
        $phone->model = $request->input('model');
        $phone->storage_capacity = $request->input('storage_capacity');
        $phone->color = $request->input('color');
        $phone->condition = $request->input('condition');
        $phone->price = $request->input('price');
        $phone->description = $request->input('description');
        $phone->image_url = $request->input('image_url');
        $phone->posted_date = $request->input('posted_date');
        $phone->seller_name = $request->input('seller_name');
        $phone->seller_email = $request->input('seller_email');
        $phone->seller_phone = $request->input('seller_phone');

        $phone->save();

        return redirect()->route('phones.index')->with('success', 'Phone has been created successfully.');
    }

    public function edit(Phone $phone){
        return view('phones.edit', compact('phone'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'storage_capacity' => 'required',
            'color' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'posted_date' => 'required',
            'seller_name' => 'required',
            'seller_email' => 'required',
            'seller_phone' => 'required',
        ]);
        $phone = Phone::find($id);
        $phone->name = $request->input('name');
        $phone->brand = $request->input('brand');
        $phone->model = $request->input('model');
        $phone->storage_capacity = $request->input('storage_capacity');
        $phone->color = $request->input('color');
        $phone->condition = $request->input('condition');
        $phone->price = $request->input('price');
        $phone->description = $request->input('description');
        $phone->image_url = $request->input('image_url');
        $phone->posted_date = $request->input('posted_date');
        $phone->seller_name = $request->input('seller_name');
        $phone->seller_email = $request->input('seller_email');
        $phone->seller_phone = $request->input('seller_phone');

        $phone->save();

        return redirect()->route('phones.index')->with('success','Data has updated successfuly.');
    }

    public function destroy(Phone $phone){
        $phone->delete();
        return redirect()->route('phones.index')->with('success','Data has Delete successfuly.');
    }

}
