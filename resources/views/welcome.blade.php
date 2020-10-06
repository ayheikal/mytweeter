<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: linear-gradient(to top right,red,blue);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 95vh;
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
                font-size: 84px;
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
            footer{
                color:rgb(14, 4, 43);
                font-weight: bolder;
                margin-left: 15px;
                
            }
            a:hover{
                padding: 4px;
                border: none;
                border-radius: 5px;
                background-color: rgb(15, 15, 15);
            }
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md " style="color:rgb(187, 173, 173)">
                    MY TWEETER
                </div>

                <div class="links" style="color:black">
                  @auth
                      <a href="{{ url('/tweets') }}">Home </a>
                      <a href="{{ url('logout') }}">Logout</a>
                    @else
                        <a style="color:white" href="{{ route('login') }}">Login</a>
                        <a style="color:white" href="{{ route('register') }}">Register</a>
                       
                  @endauth
                </div>
            </div>
        </div>
        <footer>developed by Ayman Gamal</footer>
    </body>
    
</html>
