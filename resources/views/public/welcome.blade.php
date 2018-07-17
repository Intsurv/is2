<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png')}}">

    <title>{{config('app.name', 'SmartFridge')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
</head>
<body>
    <div class="container custom-welcome-container">
        @include('inc.messages')
        <div class="jumbotron text-center custom-welcome-jumbotron">
            <h1 class="display-3">Smart Fridge</h1>
            <p class="lead">Die beste App um ihre Einkäufe zu verwalten. <i class="fa fa-shopping-cart"></i></p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Einloggen</a>
                <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Registrieren</a>
            </p>
        </div>
    </div>
</body>
</html>