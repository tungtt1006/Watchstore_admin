<link rel="stylesheet" href="{{ asset('css/back-end/brands.css') }}">
@extends('backend.layout')

@section('title', 'Brands Manage')

@section('content_header')
<li class="active" style="font-size: 15px;font-weight: 600;"><a href="{{ url('admin/brand') }}">Brands Manage</a></li>
@endsection

@section('content_main')
<div class="row">
   <div class="col-md-8"></div>
   <div class="col-md-4" style="padding-top:30px;">
     <a class="btn_create" href="{{ url('admin/brand/create') }}">Create New Brand</a>
   </div>
</div>
<table class="table table-hover">
  <thead>
    <tr class="table_title">
      <th scope="col">Brand Name</th>
      <th scope="col">Logo Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($brands as $rows)
        <tr class="table_content">
          <td>{{ $rows->name }}</td>
          <td>
             <img src="{{ asset('images/'.$rows->img_url) }}" style="border-radius:10px;width:100px;height:60px;">
          </td>
          <td class="text-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/brand/'.$rows->id.'/edit') }}" method="get">
                     @csrf
                     <button class="btn_edit" type="submit"><i class="fas fa-edit"></i></button>
                  </form>
                </div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/brand/'.$rows->id) }}" method="post" style="margin-bottom:27px;">
                     @method('DELETE')
                     @csrf
                     <button class="btn_destroy" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                </div>
            </div>
          </td>
        </tr>

        @php
           $brandsSub =  App\Brand::where('parent_id', '=', $rows->id)->get(); 
        @endphp

        @foreach($brandsSub as $rowsSub)
          <tr class="table_content1"> 
            <td>{{ $rowsSub->name }}</td>
            <td>{{ $rowsSub->anh_url }}</td>
            <td class="text-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/brand/'.$rowsSub->id.'/edit') }}" method="get">
                     @csrf
                     <button class="btn_edit" type="submit"><i class="fas fa-edit"></i></button>
                  </form>
                </div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/brand/'.$rowsSub->id) }}" method="post" style="margin-bottom:27px;">
                     @method('DELETE')
                     @csrf
                     <button class="btn_destroy" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                </div>
            </div>
          </td>
          </tr>
        @endforeach
    @endforeach
  </tbody>
</table>
@endsection