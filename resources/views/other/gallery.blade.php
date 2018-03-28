@extends('app')

@section('content')
    <h2>
        Gallery
    </h2>
    <div class="row galrow">
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption                
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img">

            </div>
            <div class="label">
                Caption
                <p class="text-muted small">
                    Explaination for the image
                </p>     
            </div>
        </div>
    </div>
    <style>
        .galrow > div.col-sm-4
        {
            padding: 2%;
            transition: 0.2s all ease-in;
        }
        .galrow > div.col-sm-4:hover
        {
            background-color: #ccc;
            border-radius: 7px;
        }

        .galrow > div.col-sm-4 > div.img
        {
            margin: auto;
            width: 40vh;
            height: 40vh;
            background-color: #000006;
            /* border: 1px dashed green; */
        }
        .galrow > div.col-sm-4 > div.label
        {
            display: block;
            font-size: 130%;
            color: #111;
            /* border: 1px dashed blue; */
        }

    </style>
@endsection