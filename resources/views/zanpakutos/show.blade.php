@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">{{env('APP_NAME')}} Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Shikai Name : {{ $zanpakutos->shikai_name }}</h5>
        <p class="card-text">Bankai Name : {{ $zanpakutos->bankai_name }}</p>
        <p class="card-text">Type : {{ $zanpakutos->type }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection