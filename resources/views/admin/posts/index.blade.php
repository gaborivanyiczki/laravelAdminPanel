@extends('layouts.admin')



@section('content')


    <h3>Posts</h3>


    <div class="container-fluid">
        <table class="table table-striped table-hover" style="width:100%">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Posted by</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                <th></th>
            </tr>

            @if($posts)

                @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><img height="auto" width="100" src="{{ $post->photo ? $post->photo->image : 'http://placehold.it/400x400'  }}" alt="" class="src"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                            <td>{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                @endforeach


            @endif
        </table>
    </div>


    @endsection
