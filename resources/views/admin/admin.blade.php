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

<legend class="text-center">Documents</legend>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Type</th>
      <th>Name</th>
      <th>Url</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
@foreach(App\Document::orderBy('type', 'ASC')->get() as $id => $doc)
    <tr>
        {!! Form::open(['action' => ['DocumentsController@update', $doc->id], 'method' => 'POST']) !!}
            {{Form::hidden('_method', 'PUT')}}
                        <td>{{$id}}</td>
            <td><input type="text" class="form-control" name="type" value="{{$doc->type}}" {{($doc->type=='constitution'?'readonly':'')}}></td>
            <td><input type="text" class="form-control" name="name" value="{{$doc->name}}"></td>
            <td><input type="text" class="form-control" name="url" value="{{$doc->url}}"></td>
            <td><input type="text" class="form-control" name="date" value="{{$doc->date}}"></td>
            <td>
                <button class="btn btn-warning">Update</button>
            </td>
        {!! Form::close() !!}

        <td>
        {!!Form::open(['action' => ['DocumentsController@destroy', $doc->id], 'method' => 'POST', 'class' => ''])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        </td>
    </tr>
@endforeach
    <tr>
    <td colspan="7"></td>
    </tr>
    <tr>
    {!! Form::open(['action' => 'DocumentsController@store', 'method' => 'POST']) !!}
        <td>Add New: </td>
        <?php $types = ['minutes', 'reports', 'policies', 'finances'] ?>
        <td>{{Form::select('type', array_combine($types, $types), '', ['class' => 'form-control'])}}</td>
        <td><input type="text" class="form-control" name="name" placeholder="Name"></td>
        <td><input type="text" class="form-control" name="url" placeholder="url"></td>
        <td><input type="text" class="form-control" name="date" placeholder="date" value="{{\Carbon\Carbon::now()->format('M d, Y')}}"></td>
        <td colspan="2" class="text-center">
        <button type="submit" class="btn btn-success">Save</button>
        </td>
    {!! Form::close() !!}
    </tr>

  </tbody>
</table>
@endsection