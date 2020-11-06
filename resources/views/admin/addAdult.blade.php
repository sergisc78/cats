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
                    <button id="navbarDropdown" class="btn btn-outline-info dropdown-toggle  btn-lg" href="#"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add an adult cat') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{action('AdminController@store')}}" enctype="multipart/form-data">
                            @csrf <div class="form-group row">
                                <label for="photo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" id="namesInputs"
                                        class="form-control @error('name') is-invalid @enderror" name="image"
                                        value="{{ old('image') }}" required autocomplete="image" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" id="namesInputs"
                                        class="form-control @error('name') is-invalid @enderror" name="catName"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}"
                                        required autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                                <div class="col-md-6">
                                    <input id="sex" type="text"
                                        class="form-control @error('password') is-invalid @enderror" name="sex" required
                                        autocomplete="new-password">


                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" id="register" class="btn btn-info">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>