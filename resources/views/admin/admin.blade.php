@extends('app')

@section('content')
<h1>Admin Panel</h1>
{{-- 
    <form action="{{route('blog.update', ['id'=>$post->id])}}" method="POST" class="form-group">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />3
    <h2>
        <label for="title">Title: </label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Enter Post Title">
    </h2>
    <small class="text-muted">Created On: {{$post->created_at}}</small>
    <h5>
        <label for="author">Written By: </label>
        <input type="text" class="form-control" name="author" value="{{$post->author}}" placeholder="Name of Author"></h5>
    <hr>
    <p>
        <label for="body">Blog Post: </label>
        <textarea name="body" class="form-control" placeholder="Enter Blog Post" rows=10>{{$post->body}}</textarea>
    </p>
    
    <hr>
    <p class="text-right">
        <button type="submit" class="btn btn-info">Update Post</button>
    </p>
</form>
 --}}
 
<ul class="nav nav-tabs">
  <li class="{{(Input::get('view')=='doc'?'active':'')}}"><a href="#documents" data-toggle="tab" aria-expanded="false">Documents</a></li>
  <li class="{{(Input::get('view')=='mem'?'active':'')}}"><a href="#members" data-toggle="tab" aria-expanded="false">Members</a></li>

</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade {{(Input::get('view')=='doc'?'active in':'')}}" id="documents">
@include('admin._documents')
  </div>
  <div class="tab-pane fade {{(Input::get('view')=='mem'?'active in':'')}}" id="members">
@include('admin._members')
  </div>
</div>
@endsection