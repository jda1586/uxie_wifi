<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{asset('mdi/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <style>

    </style>

</head>
<body>
<main style="background-image: url({{asset('img/Hotel.jpg')}})">
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Navbar Link</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi mdi-home mdi-36px"></i></a>
        </div>
    </nav>
    <div class="section no-padding">
        <div class="row">
            <div class="col s12 m6 center no-padding top-banner">
                <div class="card no-margin no-padding">
                    <div class="card-content black-text no-padding" >
                        <p>Pequeña pubicidad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section no-pad-bot">
        <div class="row center">
            <div class="col s12 m6 no-padding">
                <div class="card no-margin" style="background: rgba(255, 255, 255, .5)">
                    <div class="card-content black-text">
                        <a class="waves-effect waves-light btn blue"><i class="mdi mdi-facebook"></i>Facebook</a>
                        <a class="waves-effect waves-light btn "><i class="mdi mdi-twitter"></i>Twitter</a>
                        <p class="center-align">or</p>
                        <a class="waves-effect waves-light btn"><i class="mdi mdi-email"></i>Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="page-footer orange no-margin" >
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset('js/flip.js')}}"></script>
<script type="text/javascript" src="{{asset('js/init.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#card").flip({
            trigger: 'manual',
            speed: 1000
        });


        $("#accept").click(function () {
            $("#card").flip('toggle');
            $("#check").toggle("fast");
        });

        $('.modal').modal();
    });


</script>
</body>
</html>
