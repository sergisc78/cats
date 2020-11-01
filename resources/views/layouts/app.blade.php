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

    <!-- CSS BOOTSTRAP-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Styles -->

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">



    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="{{ asset('fontAwesome/fontawesome/css/all.min.css') }}">

    <style>
        .container3 {
            float: right;
            margin-right: 80px;
        }

        #navbarDropdown {
            width: 155px;
        }

        p {
            font-size: 40px;
            font-family: "Dancing Script", cursive;
            margin-top: 120px;
        }

        #dropdownMenuButton {
            width: 153px;

        }
    </style>


</head>

<body>

    <h1 class="header">Garden of cats &nbsp; <i class="fas fa-cat"></i></h1>



    <div id="app">

        <nav class="container3">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if(Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <button id="navbarDropdown" class="btn btn-outline-info dropdown-toggle  btn-lg" href="#" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
    </div>



    <!--   <div class="options">
        <p>Welcome {{ Auth::user()->name }}. Choose an option down below,please.</p><br>
        <select name="cats" id="select">
            <option value="">Adult Cats</option>
            <option value="">Kitten</option>
            <option value="">Special cases</option>
        </select><br>
        <button class="btn btn-info btn-lg" type="submit">Send</button>
    </div>-->

    <!-- <p>Welcome {{ Auth::user()->name }}. Choose an option down below,please.</p><br>

    <div class="options">
        <a href="" class="btn btn-info">Adult cats</a>&nbsp;&nbsp;&nbsp;
        <a href="" class="btn btn-info">Kittens</a>&nbsp;&nbsp;&nbsp;
        <a href="" class="btn btn-info">Special cases</a>
    </div>-->

    <div class="text-center">
        <p class="text-center">Welcome {{ Auth::user()->name }}. Choose an option down below,please.</p><br>
        <button class="btn btn-success dropdown-toggle btn-lg " type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Options
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Adult cats</a>
            <a class="dropdown-item" href="#">Kittens</a>
            <a class="dropdown-item" href="#">Special cases</a>
        </div><br><br>
    </div>

    <div class="footer">

        <footer><i class="fas fa-copyright"></i> 2020 Sergi Sánchez </footer>

    </div>
</body>

</html>