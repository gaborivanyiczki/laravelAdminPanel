@extends('layouts.admin')



@section('content')

 </hr>

 <h2>Users</h2>

<hr>
<h3>Admins</h3>
<div class="container-fluid">
    <table class="table table-striped table-hover" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Picture</th>
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
                @if($user->role_id==1)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->image : '/images/400x400.png'}}" alt=""></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                    <td><a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                </tr>
                @endif
            @endforeach


        @endif
    </table>
</div>


<hr>
<h3>All users</h3>


 <div class="container-fluid">
   <table class="table table-striped table-hover" style="width:100%">
     <tr>
       <th>ID</th>
         <th>Picture</th>
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
          <td><img height="50" src="{{$user->photo ? $user->photo->image : '/images/400x400.png'}}" alt=""></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
          <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
         <td><a href="{{route('users.destroy', $user->id)}}" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
      </tr>
     @endforeach


    @endif
   </table>
 </div>

@endsection