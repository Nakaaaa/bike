<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .right {
            position: absolute;
            right: 10px;
            /* top: 18px; */
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-light bg-light">
        <div class="container">
            <!-- <div class="navbar-header"> -->
                @if (Route::has('login'))
                <div class="navbar-brand mb-0 h1">バイカス！</div>
                <div class="links ml-auto">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        <!-- </div> -->
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($customs as $custom)
                <div class="card mt-3" style="width:35rem">
                    <img class="card-img-top" src="{{ empty($custom->img) ? asset('/storage/img/null/Noimage_image.png') : asset('/storage/img/'.$custom->img) }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $custom->title }}</h5>
                        <p class="card-text">
                            {!! nl2br(e($custom->customs)) !!}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>