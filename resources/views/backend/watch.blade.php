<link rel="stylesheet" href="{{ asset('css/back-end/share_read.css') }}">
<link rel="stylesheet" href="{{ asset('css/back-end/watches.css') }}">
@extends('backend.layout')

@section('title', 'Watches Manage')

@section('content_header')
<li class="active" style="font-size: 15px;font-weight: 600;"><a href="{{ url('admin/watch') }}">Watches Manage</a></li>
@endsection

@section('content_main')
<div class="row">
   <div class="col-md-8"></div>
   <div class="col-md-4" style="padding-top:30px;padding-bottom: 30px;">
     <a class="btn_create" href="{{ url('admin/watch/create') }}">Create New Watch</a>
   </div>
</div>
<table class="table table-hover">
  <thead>
    <tr class="table_title">
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($watches as $rows)
	    <tr class="table_content">
        <td>
         @if($rows->img_url)
           <img src="{{ asset('images/'.$rows->img_url) }}" style="width:250px;">
         @endif
        </td>
	      <td>{{ $rows->name }}</td>
        <td>{{ "$".number_format($rows->price) }}</td>
	      <td class="text-center">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/watch/'.$rows->id.'/edit') }}" method="get">
                     @csrf
                     <button class="btn_edit" type="submit"><i class="fas fa-edit"></i></button>
                  </form>
                </div>
                <div class="col-md-3" style="padding:0;">
                  <form action="{{ url('admin/watch/'.$rows->id) }}" method="post" style="margin-bottom:27px;">
                     @method('DELETE')
                     @csrf
                     <button class="btn_destroy" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                </div>
            </div>
          </td>
	    </tr>
    @endforeach

  </tbody>
</table>
<div class="row text-center">
  {{ $watches->links('backend.pagination') }}
</div>
@endsection