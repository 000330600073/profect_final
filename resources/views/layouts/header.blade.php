<html>
<head>

    <link rel="stylesheet" type="text/css" href=" {{ asset('test/css/style.css')}}">

<style>
    .dropbtn {
        background-color: black;
        color: white;

        min-width: 120px;
        border: none;

    }

    .dropdown {
        margin: 0px;
        padding-top: 0;
    }

    .dropdown-content {
        display: none;
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

                                    <div class="caret">
                                        User
                                        {{ Auth::user()->name }} </div>
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px;   border-radius:50% ">

                                </button>
                                <div class="dropdown-content">
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                        <a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                                        <a class="dropdown-item" href="{{ route('chat') }}"><i class="fa fa-envelope" aria-hidden="true"></i>
                                            Text Message
                                        </a>
                                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                    <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>-->


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                        @endguest
                            </div>



            </div>
    </div>

</header>

</body>
</html>
