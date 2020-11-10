@extends('layouts.plantilla')

@section('header')

<style>
    .row {
        margin-top: 50px;
        font-size: 20px;
        border: 15px;
        float: left;
        margin-left: 30px;
        margin-right: 30px;

    }

    .fa-home {
        float: right;
        font-size: 40px;
        margin-right: 40px;
        color: black;
        margin-bottom: 250px;

    }

    .footer {
        position: absolute;
        margin-top: 500px;
        margin-left: 600px;
    }
</style>

<h1 class="header">Adult cats &nbsp; <i class="fas fa-cat"></i></h1>
<a href="{{ url('/home') }}" title="Home"><i class="fas fa-home"></i></a>


<div class="container">

    @foreach ($cats as $cat)

    <div class="row ">

        <div class="col">

            <div class="col adult"><img src={{asset("images/" . $cat->image)}} width="150" /></div><br>
            <div class="col adult">Name : {{$cat->catName}}</div>
            <div class="col adult"> Age : {{$cat->age}}</div>
            <div class="col adult">Sex : {{$cat->sex}}</div><br>
            <a href="http://" class="btn btn-info btn-sm">View Cat</a><br>

        </div>

    </div>

    @endforeach

</div>

@endsection