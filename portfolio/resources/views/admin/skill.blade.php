

@extends('layouts.admin')

@section('content')

    <style>
        input {
            border:none !important;

        }
        input:active {
            border:1px solid #000;
        }
    </style>




    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif


    <h1>Skills</h1>


    <table class="striped">
        <thead>
        <tr>
            <th data-field="action">Action</th>
            <th data-field="id">Image</th>
            <th data-field="name">Nom</th>
            <th data-field="level">Niveau</th>
            <th data-field="link">Lien</th>
        </tr>
        </thead>

        <tbody>

        @foreach ($skills as $skill)

            {!! Form::model($skill, ['method' => 'PATCH','route' => ['skill.update', $skill->id]]) !!}
            <tr>
                <td> <button class="btn-floating btn-large waves-effect waves-light red" type="submit"><i class="material-icons">mode_edit</i> </button></td>
                <td><img src="{{$skill->link}}" alt="test"></td>
                <td><input type="text" name="name" value="{{$skill->name}}"></td>
                <td><input type="text" name="level" value="{{$skill->level}}"></td>
                <td><input type="text" name="link" value="{{$skill->link}}"></td>
            </tr>
            {!! Form::close() !!}
        @endforeach

        </tbody>
    </table>




@endsection
