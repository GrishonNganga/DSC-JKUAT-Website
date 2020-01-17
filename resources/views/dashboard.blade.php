@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    <h3> Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table tabled-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</th> 
                                <td></td>
                                <td></td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}</td>
                            </tr>
                            
                            @endforeach
                        </table>
                    @else
                        You do not have any published posts
                    @endif
                </div>
            </div>
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
        </div>
    </div>
</div>
@endsection
