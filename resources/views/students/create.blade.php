@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        
        <form action="{{ url('students') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>mail</label></br>
          <input type="text" name="mail" id="mail" class="form-control"></br>
          <label>phone</label></br>
          <input type="number" name="phone" id="phone" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
@endsection