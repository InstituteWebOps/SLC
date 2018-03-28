@extends('app')

@section('content')
<div class="well well-lg">
    <h2>
        {{-- Welcome to SLC Website --}}
        <label class="text-center">Download The constitution: </label>
        <a href="{{App\Document::where('type', '=', 'constitution')->first()->url}}" class="btn btn-primary">{{App\Document::where('type', '=', 'constitution')->first()->name}}</a>
    </h2>
</div>
@endsection