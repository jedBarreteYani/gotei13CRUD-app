@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">{{env('APP_NAME')}} Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $captains->name }}</h5>
        <p class="card-text">Address : {{ $captains->address }}</p>
        <p class="card-text">Squad : {{ $captains->squad }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection