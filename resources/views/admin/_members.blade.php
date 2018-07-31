
<?php $types = ['secretary', 'legislator'] ?>

<table class="table table-striped table-hover ">
<legend class="text-center">Members</legend>
  <thead>
    <tr>
      <th>#</th>
      <th>Type</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Email ID</th>
      <th>Contact No.</th>
      {{-- <th>Date</th> --}}
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
@foreach(App\Person::orderBy('type', 'ASC')->get() as $id => $person)
    <tr>
        {!! Form::open(['action' => ['MembersController@update', $person->id], 'method' => 'POST']) !!}
            {{Form::hidden('_method', 'PUT')}}
            <td>{{$id+1}}</td>
            <td>
            @if($person->type=='constitution')
                <input type="text" class="form-control" name="type" value="{{$person->type}}" {{($person->type=='constitution'?'readonly':'')}}>
            @else
                {{-- <select class="form-control" name="type" {{($person->type=='constitution'?'readonly':'')}}> --}}
                <select class="form-control" name="type">
                @foreach($types as $t)
                    <option value="{{ucfirst($t)}}" {{($t==$person->type?'selected':'')}}>{{ucfirst($t)}}</option>
                @endforeach
                </select>
            @endif
            </td>

            {{-- <td>{{Form::select('type', array_combine($types, $types), '', ['class' => 'form-control'])}}</td> --}}
            {{-- <td><input type="text" class="form-control" name="type" value="{{$person->type}}" {{($person->type=='constitution'?'readonly':'')}}></td> --}}
            <td><input type="text" class="form-control" name="name" value="{{$person->name}}"></td>
            <td><input type="text" class="form-control" name="designation" value="{{$person->designation}}"></td>
            <td><input type="text" class="form-control" name="emailID" value="{{$person->emailID}}"></td>
            <td><input type="text" class="form-control" name="contact" value="{{$person->contact}}"></td>
            {{-- <td><input type="text" class="form-control" name="date" value="{{$person->date}}"></td> --}}
            <td>
                <button class="btn btn-warning">Update</button>
            </td>
        {!! Form::close() !!}

        <td>
        {{-- @if($person->type!=='constitution')
        {!!Form::open(['action' => ['MembersController@destroy', $person->id], 'method' => 'POST', 'class' => ''])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!} --}}
        {{-- @else --}}
            <button class="btn btn-danger" disabled>Delete</button>
        {{-- @endif --}}
        </td>
    </tr>
@endforeach
    <tr>
    <td colspan="7"></td>
    </tr>
    <tr>
    {!! Form::open(['action' => 'MembersController@store', 'method' => 'POST']) !!}
        <td>Add New: </td>
        <td>{{Form::select('type', array_combine($types, $types), '', ['class' => 'form-control'])}}</td>
        <td><input type="text" class="form-control" name="name" placeholder="Name"></td>
        <td><input type="text" class="form-control" name="designation" placeholder="Designation"></td>
        <td><input type="text" class="form-control" name="emailID" placeholder="emailID"></td>
        <td><input type="text" class="form-control" name="contact" placeholder="contact"></td>
        {{-- <td><input type="text" class="form-control" name="date" placeholder="date" value="{{\Carbon\Carbon::now()->format('M d, Y')}}"></td> --}}
        <td colspan="2" class="text-center">
        <button type="submit" class="btn btn-success">Save</button>
        </td>
    {!! Form::close() !!}
    </tr>

  </tbody>
</table>