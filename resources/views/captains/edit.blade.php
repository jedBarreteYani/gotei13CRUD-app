@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit {{env('APP_NAME')}} Captains Page</div>
  <div class="card-body">
      
      <form action="{{ url('captains/' .$captains->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$captains->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$captains->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$captains->address}}" class="form-control"></br>
        <label>Squad</label></br>
        <input type="text" name="squad" id="squad" value="{{$captains->squad}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop