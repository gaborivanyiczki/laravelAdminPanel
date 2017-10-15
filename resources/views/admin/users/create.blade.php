@extends('layouts.admin')





@section('content')

  <h2>Create User</h2>

  {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store', 'files'=>true]) !!}
  {{csrf_field()}}

  <div class="form-group">
     {!! Form::label('name', 'Name:') !!}
     {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', [''=>'Choose option'] + $roles , null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('is_active', 'Status:') !!}
    {!! Form::select('is_active', array(1=>'Active', 0=>'Not active') ,0, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
  </div>

 {!! Form::close() !!}

  @include('includes.error-message')

@endsection