@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('students/'.$students->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>mail</label></br>
        <input type="text" name="address" id="address" value="{{$students->mail}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="mobile" maxlength="11" minlength="11" id="mobile" value="{{$students->phone}}" class="form-control"></br>
        <label>file</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  <div class="text-center">
    <button class="btn btn-success" onclick="history.back()">Go Back</button><br><br> 
  </div>
</div>
@stop