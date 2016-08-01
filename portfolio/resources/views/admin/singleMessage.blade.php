

@extends('layouts.admin')

@section('content')

    <div class="single-message">

    <div class="col s8">


        <p><b>Nom :   </b>{{$message->name}}</p>

        <p><b>Email :   </b>{{$message->email}}</p>

        <p><b>Message :</b>     {{$message->text}}</p>


    </div>
    <div class="col s2">

        <p><b>ID :   </b>{{$message->id}}</p>
        <p><b>ip :   </b>{{$message->ip}}</p>
        <p><b>date :   </b>{{$message->created_at}}</p>

    </div>

    </div>
@endsection
