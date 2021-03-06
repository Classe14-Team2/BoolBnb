<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BoolBnb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/upr') }}">Home</a>
                    @else

                        <a href="{{ url('/apartments') }}">Mostra tutto</a>

                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HOME PAGE CON L INPUT DI RICERCA
                    <div class="">
                      <input type="search" id="address" class="form-control" placeholder="Where are we going?" />
                        <button onclick="cerca()"> <a href="{{route('search')}}">Cerca </a></button>



                      <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

                      <script>
                        function cerca() {
                           var getInput = document.querySelector('#address').value;
                           localStorage.setItem("storageName",getInput);
                        }

                        (function() {
                          var placesAutocomplete = places({
                            appId: 'pl72UD0E1RWC',
                            apiKey: '6f2ccdf8214af2f289be15103d07cf1c',
                            container: document.querySelector('#address')
                          });
                        })();
                      </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
