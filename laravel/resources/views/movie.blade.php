<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./../public/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
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

            <div class="">
                <div class="title m-b-md">
                    Movies
                </div>

                <div class="links">
                    <a href="{{route('home')}}">home</a>
                </div>

                <div class="movies">

                    @foreach ($movies as $movie)

                    <div class="movie">
                        <h4 class="title">{{$movie->title}}</h4>
                        <div>
                            Data: {{$movie->date}}
                        </div>
                        <div>
                            Voto: {{$movie->vote}}
                        </div>
                    </div>
                       
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>