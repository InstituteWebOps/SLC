@extends('app')

@section('content')
    <h2>{{$post->title}}</h2>
    <small class="text-muted">Created On: {{$post->created_at}}</small>
    <h5>Written By: {{$post->author}}</h5>
    <hr>
    <p>{!! str_replace('
' ,'<br>' ,str_replace(' ','&nbsp;', $post->body)) !!}</p>
    
    <hr>
    <form class="text-right" action="{{route('blog.destroy', ['id' => $post->id])}}" method="POST">
    Admin actions<br>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <a href="{{route('blog.edit', ['id' => $post->id])}}" class="btn btn-success">Edit Post</a>
    <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
@endsection