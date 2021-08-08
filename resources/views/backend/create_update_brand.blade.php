<link rel="stylesheet" href="{{ asset('css/back-end/brands.css') }}">
@extends('backend.layout')

@section('title', 'Create')

@section('content_header')
<li><a href="{{ url('admin/brand') }}">Brands Manage</a></li>
@if(!isset($brand))
   <li class="active" style="font-size:15px;font-weight:600;"><a href="{{ url('admin/brand/create') }}">Create a brand</a></li>
@else
   <li class="active" style="font-size:15px;font-weight:600;"><a href="{{ url('admin/brand/'.$brand->id.'/edit') }}">Update a brand</a></li>
@endif
@endsection

@section('content_main')
@if(!isset($brand))
   <form method="post" enctype="multipart/form-data" action="{{ url('admin/brand') }}">
@else
   <form method="post" enctype="multipart/form-data" action="{{ url('admin/brand/'.$brand->id) }}">
    @method('PUT')
@endif
    @csrf
    <div class="components_create_update">
      <label class="form-label">Brand Name</label>
      <input type="text" class="form-control" name="brand" value="{{ isset($brand->name) ? $brand->name : '' }}" style="width:50%;">
    </div>
    @if ($errors->has('brand'))
        <div class="components_errors">
            <p style="color: #ff0f0f;">{{ $errors->first('brand') }}</p>
        </div>
    @endif

    <div class="components_create_update" style="width:20%;">
      <label class="form-label">Brands</label>
      <select class="form-control" name="parent_id">
        <option value="0" {{ isset($brand->parent_id) && ($brand->parent_id == 0) ? 'selected' : '' }}></option>  
        @foreach($brands as $rows)
          <option value="{{ $rows->id }}" {{ isset($brand->parent_id) && ($brand->parent_id == $rows->id) ? 'selected' : '' }}>{{ $rows->name }}</option>
        @endforeach 
      </select>
    </div>

    <div class="components_create_update" >
       <label class="form-label">Sex:</label><br>
       <input type="radio" name="sex" value="1" {{ isset($brand->sex) && ($brand->sex == 1) ? 'checked' : '' }}>
       <label class="form-label">Men</label>&emsp;
       <input type="radio" id="css" name="sex" value="0" {{ isset($brand->sex) && ($brand->sex == 0) ? 'checked' : '' }}>
       <label class="form-label">Women</label>&emsp;
       <input type="radio" id="css" name="sex" value="2" {{ isset($brand->sex) && ($brand->sex == 2) ? 'checked' : '' }}>
       <label class="form-label">Other</label>
    </div>
     @if ($errors->has('sex'))
        <div class="components_errors">
            <p style="color: #ff0f0f;">{{ $errors->first('sex') }}</p>
        </div>
    @endif

    <div class="components_create_update" >
           <label class="form-label">Display:</label>&emsp;
           <input type="checkbox" name="display" value="1" {{ isset($brand->display) && ($brand->display == 1) ? 'checked' : '' }}>
    </div>

    <div class="components_create_update" style="margin-top:20px;">
      <label class="form-label">Logo Image</label>
      <input class="form-control" type="file" id="formFile" name="image" style="width:50%;">
    </div>
    
    <button type="submit" class="btn btn_create_update" name="submit">{{ isset($brand) ? 'Update' : 'Create' }}</button>
</form>
@endsection