@extends('layouts.plantilla')

@section('header')

<h1 class="header">Adult cats &nbsp; <i class="fas fa-cat"></i></h1>


<div class="container">

    <div class="row row-cols-5">
        <div class="col">ID</div>
        <div class="col">Image</div>
        <div class="col">Name</div>
        <div class="col">Age</div>
        <div class="col">Sex</div>

    </div>

    @foreach ($cats as $cat)


    <div class="row row-cols-5">
        <div class="col adult">{{$cat->id}}</div>
        <div class="col adult"><img src={{asset("images/" . $cat->image)}} width="150" /></div>
        <div class="col adult">{{$cat->catName}}</div>
        <div class="col adult">{{$cat->age}}</div>
        <div class="col adult">{{$cat->sex}}</div>


    </div>

    @endforeach

</div>



@endsection