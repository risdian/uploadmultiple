<?php

namespace App\Http\Controllers;

use App\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendor_list = vendor::paginate(10);
 
        return view('vendors.index', compact('vendor_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendors.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validate = new vendor();

        $validate->name = $request->input('name');
        $validate->phone_no = $request->input('phone_no');
        $validate->ic_no = $request->input('ic_no');
        $validate->email = $request->input('email');
        $validate->address = $request->input('address');
        $validate->poscode = $request->input('poscode');
        $validate->city = $request->input('city');
        $validate->state = $request->input('state');
        $validate->country = $request->input('country');
        $validate->password = $request->input('password');


        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extension;
            $file->move('upload/vendors', $filename);
            $validate->image = $filename;
        }else{

            return $request;
            $validate->image = '';

        }

      //  vendor::create($validate);

      $validate->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor $vendor)
    {
        //
    }
}
