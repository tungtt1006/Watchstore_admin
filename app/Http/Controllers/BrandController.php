<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Http\Requests\BrandValidation;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('parent_id', '=', 0)
                ->get();
        return view('backend.brand')->with(['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('parent_id', '=', 0)
                ->get();
        return view('backend.create_update_brand')->with(['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandValidation $request)
    {
        $newbrand = new Brand;
        $newbrand->name = $request->brand;
        $newbrand->parent_id = $request->parent_id;
        if($request->parent_id == 0) 
        {
          $newbrand->sex = 2;
        } else {
          $newbrand->sex = $request->sex;
        } 
        $newbrand->display = isset($request->display) ? $request->display : 0;
        if (!$request->hasFile('image')) 
        {
          $newbrand->img_url = '';
        } else {
          $image = $request->file('image');
          $storedPath = $image->move('images', $image->getClientOriginalName());
          $newbrand->img_url = $image->getClientOriginalName();
        }

        $newbrand->link = 1;
        $newbrand->save();
        return redirect(url('admin/brand'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::where('id', '=', $id)
                ->first();
        $brands = Brand::where('parent_id', '=', 0)
                ->get();
        return view('backend.create_update_brand')->with(['brand' => $brand, 'brands' => $brands]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandValidation $request, $id)
    {
       $brand = Brand::find($id);
       $brand->name = $request->brand;
       $brand->parent_id = $request->parent_id;
       $brand->sex = isset($request->sex) ? $request->sex : 2;
       $brand->display = isset($request->display) ? $request->display : 0;
       if ($request->hasFile('image')) {
          $image = $request->file('image');
          $storedPath = $image->move('images', $image->getClientOriginalName());
          $brand->img_url = $image->getClientOriginalName();
       }
       $brand->link = 1;
       $brand->save();
       return redirect(url('admin/brand')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if($brand->parent_id == 0) {
            $brands = Brand::where('parent_id', '=', $id)->get();        
            Brand::destroy($brands->toArray());
            $brand->delete();
        } else {
            $brand->delete();
        }
        return redirect(url('admin/brand'));
    }
}
