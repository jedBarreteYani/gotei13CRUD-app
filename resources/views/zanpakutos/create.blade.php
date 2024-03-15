@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">{{env('APP_NAME')}} Page</div>
  <div class="card-body">
      
      <form action="{{ url('zanpakutos') }}" method="post">
        @csrf
        <label>Shikai Name</label></br>
        <input type="text" name="shikai_name" id="shikai_name" class="form-control"></br>
        <label>Bankai Name</label></br>
        <input type="text" name="bankai_name" id="bankai_name" class="form-control"></br>
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop