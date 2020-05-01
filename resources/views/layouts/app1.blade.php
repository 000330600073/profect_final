<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background:url("/test/img/msti.jpg") ;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .wrapper {
            margin: 0 auto;
            width: 976px;
            position: relative;
            padding-bottom: 7px;
            font-size: 13px;
        }
        .dropbtn {
            background-color: black;
            color: white;
            padding: 5px;
            min-width: 120px;

            border: none;
        }
        a{color:white;
            text-decoration:none;}
        a:hover{color:red;
            text-decoration:none;}


        .dropdown {
            position: center;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 120px;
            text-align: center;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black !important;

            text-decoration: none;
            display: block;
        }
        .kinogo {
            font-size: 1.2em;
            display: inline;
            text-decoration: none;
        }
        .right {
            display: inline;
            float: right;
        }
        header {
            padding: 6px 10% 6px 10%;
            color: #e6e6e6;
            font-size: 0.9em;
            background-color: black;
        }
        .dropdown-content a:hover {background-color: red;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: grey;}
    </style>
</head>
<body>

<header>
    <div class="wrapper">






        <a class="kinogo" href="{{ url('/') }}" >
            KINOGO
        </a>

        <div class="right">
            @guest
                <a  href="{{ route('login') }}">{{ __('Вход/') }}</a>
                @if (Route::has('register'))
                    <a  href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                @endif
            @else

                <div class="dropdown" >
                    <button class="dropbtn">
                        {{ Auth::user()->name }}
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px;   border-radius:50%">


                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                            @csrf
                        </form>

                    </div>
                </div>
            @endguest




        </div>
    </div>
</header>
<main class="py-4" >
    @yield('content')
</main>
</body>
</html>


