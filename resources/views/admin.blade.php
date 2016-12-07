{{--/**
 * Created by PhpStorm.
 * User: jose_
 * Date: 02/12/2016
 * Time: 10:05 PM
 */--}}

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UXIE Admin @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mdi/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    {{--<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    <style>

    </style>
</head>
<nav>
    <ul>
        <li>opcion1</li>
        <li>opcion2</li>
        <li>opcion3</li>
        <li>opcion4</li>
    </ul>
</nav>
<body>

<div class="container">
    @yield('dash')
</div>
</body>
<footer>

</footer>
</html>