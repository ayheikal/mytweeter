<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script
    src="https://kit.fontawesome.com/765f612e6e.js"
    crossorigin="anonymous">
    </script>
</head>
<body>
    <div id="app">
     <section class="px-8 py-4" id="heading">
         <header class="container mx-auto">
             <h1>
             <img  style="width: 130px; height:50px;" src="/images/logo.png" alt='tweety' id="logo-img">
                 @if(auth()->check())
                 <ul id="logout-btn" style="position: absolute;top:20px;right:32px">
                     <li><a href="{{route("logout")}}">Logout</a></li>
                 </ul>
                 @else
                     <ul id="nav-link" >
                         <li id="register"><a href="{{route("register")}}">register</a></li>
                     </ul>
                 @endif
             </h1>
        </header>
     </section>

     <section class="px-8">
        <main class=" container mx-auto">
            <div class="lg:flex lg:justify-between" >
                <div class="lg:w-33 ">
                    @include('sidebarLinks')
                </div>

               @yield('content')


                    @include('friendsList')


            </div>
        </main>
    </section>
    </div>
</body>
</html>
