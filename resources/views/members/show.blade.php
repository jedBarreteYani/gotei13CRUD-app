@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">{{env('APP_NAME')}} Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $members->name }}</h5>
        <p class="card-text">Address : {{ $members->address }}</p>
        <p class="card-text">Squad : {{ $members->squad }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection