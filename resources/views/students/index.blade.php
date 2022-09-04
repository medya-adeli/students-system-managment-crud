@extends('students.layout')
@section('content')
    <div  class="text-center">
        <h1>welcome</h1>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>mail</th>
                    <th>phone</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->mail}}</td>
                        <td>{{$item->phone}}</td>
                    <td>        
                        <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <form method="POST" action="{{'/students'.'/'.$item->id}}"accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                 <button  type="button" class=" btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                  </svg><a class="text-white text-decoration-none" href="{{url('/students/create')}}"> add Students</a></button>
            </div>
