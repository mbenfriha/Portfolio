{{ Html::style('css/admin.css') }}
{{ Html::script('js/admin.js') }}

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">

<div class="row">
    <div class="nav_side col s1 left">
        <ul>
            <li class="icon-settings"><a href="#"></a></li>
            <li class="icon-home {{ Request::segment(2) === 'index' ? 'selected' : null }}"><a href="{{url('admin/index')}}"></a></li>
            <li class="icon-message {{ Request::segment(2) === 'message' ? 'selected' : null }}"><a href="{{url('admin/message')}}"></a></li>
            <li class="icon-circles {{ Request::segment(2) === 'skill' ? 'selected' : null }}"><a href="{{url('admin/skill')}}"></a></li>
        </ul>
    </div>


    <div class="top_nav col s11">
        <ul class="right">
            <li class="icon-logout"><a href="{{url('logout')}}"></a></li>
            <li class="icon-profil"></li>
            <li></li>
        </ul>
    </div>



    <div class="col s11 details">

@yield('content')

        </div>
</div>



        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</body>
</html>