@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Informations</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">StudentId: {{ $info->Idnumber }}</h5>
        <p class="card-text">Take out date: {{ $info->date_one }}</p>
        <p class="card-text">To be returned date: {{ $info->date_tow }}</p>
        <p class="card-text">Quantity : {{ $info->count }}</p>
       
  </div>
       
    </hr>
  
  </div>
</div>
@endsection