<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('mdi/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    </style>

</head>
<body>
<div class="row">
    <div class="col s12 m4 l4"></div>
    <div class="col s12 m4 l4">
        <div id="card">
            <div class="front">
                <div class="no-margin card blue-grey white">
                    <div class="card-content black-text no-padding">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Code.jpg" alt=""
                             id="welcome_image">
                    </div>
                    <div class="card-action" id="check">
                        <input type="checkbox" id="accept"/>
                        <label for="accept">Red</label>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="no-margin card blue-grey white">
                    <div class="card-content black-text">
                        {{--@include('interactions.baner')--}}
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4"></div>
</div>


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset('js/flip.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#card").flip({
            trigger: 'manual',
            speed: 1000
        });
    });

    $("#accept").click(function () {
        $("#card").flip('toggle');
        $("#check").toggle("fast");
    });
</script>
</body>
</html>
