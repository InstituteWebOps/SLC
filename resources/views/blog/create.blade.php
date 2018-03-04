@extends('app')

@section('content')
<form action="{{route('blog.store')}}" method="POST" class="form-group">
    {{ csrf_field() }}
    <!-- <input type="hidden" name="_method" value="PUT" /> -->
    <h2>
        <label for="title">Title: </label>
        <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
    </h2>
    <h5>
        <label for="author">Written By: </label>
        <input type="text" class="form-control" name="author" placeholder="Name of Author"></h5>
    <hr>
    <p>
        <label for="body">Blog Post: </label>
        <textarea name="body" class="form-control" placeholder="Enter Blog Post" rows=10></textarea>
    </p>
    
    <hr>
    <p class="text-right">
        <button type="submit" class="btn btn-info">Update Post</button>
    </p>
</form>
@endsection