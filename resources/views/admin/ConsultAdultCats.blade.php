@extends('layouts.plantilla')

@section('header')

<style>
    .row {
        margin-top: 50px;
        font-size: 20px;
    }

    .fa-home {
        float: right;
        font-size: 40px;
        margin-right: 40px;
        color: black;

    }
    .btn-info{
        font-size: 20px;
        width: 20px;
    }
</style>

<h1 class="header">Adult cats &nbsp; <i class="fas fa-cat"></i></h1>
<a href="{{ url('/admin') }}"><i class="fas fa-home" title="Home"></i></a>


<div class="container">

    <div class="row row-cols-5">
        <div class="col">ID</div>
       <!-- <div class="col">Image</div>-->
        <div class="col">Name</div>
        <div class="col">Age</div>
        <div class="col">Sex</div>
        <!-- <div class="col">View Cat</div>-->

    </div>

    @foreach ($cats as $cat)


    <div class="row row-cols-5 cats">
        <div class="col adult">{{$cat->id}}</div>
        <!--<div class="col adult"><img src={{asset("images/" . $cat->image)}} width="150" /></div>-->
        <div class="col adult">{{$cat->catName}}</div>
        <div class="col adult">{{$cat->age}}</div>
        <div class="col adult">{{$cat->sex}}</div>
        <a href="http://" class="btn btn-info">View Cat</a>

    </div>

    @endforeach

</div>



@endsection

