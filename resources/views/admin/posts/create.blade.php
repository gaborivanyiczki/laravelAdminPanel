@extends('layouts.admin')



@section('content')


    <h3>Posts Create</h3>


    <div class="row">

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store', 'files'=>true]) !!}
    {{csrf_field()}}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', array(''=>'Options') + $categories , null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Picture:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'row'=>3]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>

    <div class="row">

    @include('includes.error-message')

    </div>
@endsection