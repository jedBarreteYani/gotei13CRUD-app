@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit {{env('APP_NAME')}} Zanpakutos Page</div>
  <div class="card-body">
      
      <form action="{{ url('zanpakutos/' .$zanpakutos->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$zanpakutos->id}}" id="id" />
        <label>Shikai Name</label></br>
        <input type="text" name="shikai_name" id="shikai_name" value="{{$zanpakutos->shikai_name}}" class="form-control"></br>
        <label>Bankai Name</label></br>
        <input type="text" name="bankai_name" id="bankai_name" value="{{$zanpakutos->bankai_name}}" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$zanpakutos->type}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop