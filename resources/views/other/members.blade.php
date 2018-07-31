@extends('app')

@section('content')
<div class="container">
    <h2>Members of the Student's Legislative Council, IIT Madras</h2>
    <p>Being a part of the Student's Legislative Council is a honorable responsibility.<br>
    ...................................................................................<br>
    ...................................................................................<br>
    ...................................................................................<br>
    ...........................Insert Text Here.............................<br>
    ...................................................................................<br>
    ...................................................................................<br>
    ...................................................................................<br>
</p>
    <div class="text-center row cards">
        <legend>Executive Council Members</legend>
        @foreach(App\Person::where('type', 'secretary')->get() as $person)
        <div class="col-sm-12 col-md-3 col-lg-3">
            <h3>{{$person->name}}</h3>
            <h4>{{$person->designation}}</h4>
            <p>Contact: {{$person->contact}}<br>
               E-mail: {{$person->emailID}}</p>
        </div>
        @endforeach
    </div>
    <div class="text-center row cards">
        <legend>SLC Legislators</legend>
        @foreach(App\Person::where('type', 'legislator')->get() as $person)
        <div class="col-sm-12 col-md-3 col-lg-3">
            <h3>{{$person->name}}</h3>
            <h4>{{$person->designation}}</h4>
            <p>Contact: {{$person->contact}}<br>
               E-mail: {{$person->emailID}}</p>
        </div>
        @endforeach
    </div>
</div>
<style>
.cards>div
{
    background: #efefef;
    /*border: 1px dotted blue*/;
    border-radius: 10px;
    transition: all 0.7s ease-out;
}
.cards>div:hover
{
    background: #d6d4d4;    
    transition: all 0.27s ease-in;
}
</style>
@endsection