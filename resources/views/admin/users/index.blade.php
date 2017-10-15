@extends('layouts.admin')



@section('content')

 </hr>

 <h2>Users</h2>

 <div class="container-fluid">
   <table class="table table-striped table-hover" style="width:100%">
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Role</th>
       <th>Status</th>
       <th>Created At</th>
       <th>Updated At</th>
       <th>Edit</th>
       <th>Delete</th>
     </tr>

    @if($users)

     @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
      </tr>
     @endforeach


    @endif
   </table>
 </div>

@endsection