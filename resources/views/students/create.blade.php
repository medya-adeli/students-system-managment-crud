@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        
        <form action="{{ url('students') }}" method="post" autocomplete="off" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>mail</label></br>
          <input type="email" name="mail" id="mail" class="form-control"></br>
          <label>phone</label></br>
          <input type="tel" name="phone" id="phone" minlength="11" maxlength="11" class="form-control"></br>
          <label>file</label></br>
          <input type="file" name="image" id="image"  accept="image/*" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>

      </form>
    
    </div>
  </div>
@endsection