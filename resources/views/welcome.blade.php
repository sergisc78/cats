@extends('layouts.plantilla')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">

       <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">

        
        @section('header')

        <h1 class="header">Garden of cats &nbsp; <i class="fas fa-cat"></i></h1>
            
        

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-info btn-lg ">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info btn-lg ">Register</a>
                        @endif
                    @endif
                </div>
            @endif
   </div>

<div class="container">

    <h2>Are you a catlover?. Would you like to adopt an adult cat or a kitten?.</h2>
    <h2> If the answer is yes, please register or login.</h2>
   </div>


   <div class="social ">
    <a href="http://facebook.es"><i class="fab fa-facebook" title="Facebook"></i></a>&nbsp;
    <a href="http://www.twitter.com"><i class="fab fa-twitter" title="Twitter"></i></a>&nbsp;
    <a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram" title="Instagram"></i></a>&nbsp;
    <a href="http://www.facebook.com"><i class="fas fa-at" title="Contact us"></i></a>&nbsp;
    <a href="http://www.facebook.com"><i class="fas fa-map-marker" title="Location"></i></a>

   </div>
   
   @endsection

  
   
    </body>
</html>
