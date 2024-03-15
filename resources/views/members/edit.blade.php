@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit {{env('APP_NAME')}} Member Page</div>
  <div class="card-body">
      
      <form action="{{ url('members/' .$members->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$members->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$members->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$members->address}}" class="form-control"></br>
        <label>Squad</label></br>
        <input type="text" name="squad" id="squad" value="{{$members->squad}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop