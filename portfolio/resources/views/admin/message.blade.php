

@extends('layouts.admin')

@section('content')

    <h1>Messages</h1>

    <table>
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="name">Nom</th>
            <th data-field="email">Email</th>
            <th data-field="title">Titre</th>
            <th data-field="date">Date</th>
        </tr>
        </thead>

        <tbody>

        @foreach ($messages as $message)
            @if(!$message->view)
                <tr class="blue lighten-5">
            @else
                <tr>
            @endif
                    <td>{{$message->id}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td><a href="/message/{{$message->id}}">{{$message->title}}</a></td>
                    <td>{{$message->created_at}}</td>
                </tr>
                @endforeach

        </tbody>
    </table>

    {!! $messages->render() !!}


@endsection
