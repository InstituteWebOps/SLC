@extends('app')

@section('content')
    <h2>
        Blog - SLC Website
        <a href="{{route('blog.create')}}" class="btn btn-info">Create New Post</a>
    </h2>
    <hr>
    <div class="list-group">
        @foreach($posts as $post)
        <a href="{{route('blog.show', ['id' => $post->id])}}" class="list-group-item">
            <h3 class="list-group-item-heading">{{$post->title}}</h3>
            <h5>Written By: {{$post->author}}</h5>
            <small class="text-muted" style="float: right">Created On: {{$post->created_at}}</small>
            <p class="list-group-item-text">{{substr($post->body, 0, 400).(strlen($post->body)>399?'...':'')}}</p>
        </a>
        @endforeach
    </div>
@endsection