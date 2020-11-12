@extends('layouts.plantilla')


@section('header')

<style>
    .row {
        margin-top: 50px;
        font-size: 20px;
    }

    .fa-hand-point-left {
        float: right;
        font-size: 40px;
        margin-right: 40px;
        color: black;
        margin-bottom: 250px;

    }
</style>

<h1 class="header">{{$cats->catName}} &nbsp; <i class="fas fa-cat"></i></h1>
<a href="{{ url('/users/adultCats') }}"><i class="fas fa-hand-point-left" title="Back to adult cats"></i></a>


<div class="container">


    <div class="row ">

        <div class="col">

            <div class="col adult"><img src={{asset("images/" . $cats->image)}} width="250" /></div><br>
            <div class="col adult">Name : {{$cats->catName}}</div>
            <div class="col adult"> Age : {{$cats->age}}</div>
            <div class="col adult">Sex : {{$cats->sex}}</div><br>
            <a href="{{url('/users', $cats->catName)}}" class="btn btn-info btn-sm">Would you like to adopt
                {{$cats->catName}} ?</a><br>

        </div>

    </div>



</div>



@endsection