@extends('app')

@section('content')
<div class="row">
    @foreach(array('reports', 'policies', 'minutes', 'finances') as $name)
    <div class="col-md-6">
        <h2 class="text-center">{{ucfirst($name)}}</h2>
        <hr>
        <ul class="list-group">
        @foreach(App\Document::where('type', '=', $name)->get() as $doc)
            <a href="//{{$doc->url}}" class="list-group-item">
                <span class="badge">{{$doc->date}}</span>
                {{$doc->name}}
            </a>
        @endforeach
        </ul>
    </div>
    @endforeach
</div>
@endsection