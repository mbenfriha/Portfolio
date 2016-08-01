


@extends('layouts.admin')

@section('content')

    <div class="details">


        <div class="col s3 offset-s1 reviews">
            <div class="title"><h2>Derniers message</h2>

                @if($count > 0)
            <span class="counter">{{$count}}</span>
            @endif
            </div>
            <ul>
                @foreach ($messages as $message)

                    <li>
                        {{$message->title}}
                        <br>
                        {{$message->created_at}}
                    </li>

                @endforeach
            </ul>
        </div>
        <div class="col s3 reviews">
            <div class="title"><h2>Dernière modification skills</h2></div>
        </div>
        <div class="col s3 reviews">
            <div class="title"><h2>Dernière visites</h2></div>
        </div>

    </div>

@endsection