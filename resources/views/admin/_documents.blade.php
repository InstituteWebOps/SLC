
<?php $types = ['minutes', 'reports', 'policies', 'finances'] ?>

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
            <td>
            @if($doc->type=='constitution')
                <input type="text" class="form-control" name="type" value="{{$doc->type}}" {{($doc->type=='constitution'?'readonly':'')}}>
            @else
                <select class="form-control" name="type" {{($doc->type=='constitution'?'readonly':'')}}>
                @foreach($types as $t)
                    <option value="{{$t}}" {{($t==$doc->type?'selected':'')}}>{{$t}}</option>
                @endforeach
                </select>
            @endif
            </td>

            {{-- <td>{{Form::select('type', array_combine($types, $types), '', ['class' => 'form-control'])}}</td> --}}
            {{-- <td><input type="text" class="form-control" name="type" value="{{$doc->type}}" {{($doc->type=='constitution'?'readonly':'')}}></td> --}}
            <td><input type="text" class="form-control" name="name" value="{{$doc->name}}"></td>
            <td><input type="text" class="form-control" name="url" value="{{$doc->url}}"></td>
            <td><input type="text" class="form-control" name="date" value="{{$doc->date}}"></td>
            <td>
                <button class="btn btn-warning">Update</button>
            </td>
        {!! Form::close() !!}

        <td>
        @if($doc->type!=='constitution')
        {!!Form::open(['action' => ['DocumentsController@destroy', $doc->id], 'method' => 'POST', 'class' => ''])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @else
            <button class="btn btn-danger" disabled>Delete</button>
        @endif
        </td>
    </tr>
@endforeach
    <tr>
    <td colspan="7"></td>
    </tr>
    <tr>
    {!! Form::open(['action' => 'DocumentsController@store', 'method' => 'POST']) !!}
        <td>Add New: </td>
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