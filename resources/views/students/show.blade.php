@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">show Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">mail : {{ $students->mail }}</p>
        <p class="card-text">phone : {{ $students->phone }}</p>
        <p class="card-text">file : {{ $students->image }}</p>
  </div>
      
    </hr>
  
  </div>
</div>