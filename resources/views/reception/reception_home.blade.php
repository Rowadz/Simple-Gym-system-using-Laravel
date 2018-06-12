@extends('layouts.app') @section('title',session('reception')[0]->FIRST_NAME) @section('content')
<div class="container mt-5">
    <div class="jumbotron bg-dark ">

        <h1 class="text-danger animated zoomInDown">Welcome {{session('reception')[0]->FIRST_NAME}}
            <small class="text-muted">--reception--</small></h1>
        {{--
        <h1>Welcome {{session('reception')[0]->FIRST_NAME}}</h1>
        <h1>Your phone number is {{session('reception')[0]->Phone}}</h1>
        <h1>Your Password is {{session('reception')[0]->Password}}</h1>
        <h1>Your Password is {{session('reception')[0]->DOB}}</h1>
        <h1>Your Password is {{session('reception')[0]->SALARY}}</h1>
        --}}
        <div class="row ">
            <div class="col-md-12 text-muted animated wobble">
                <h4>Add customer <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/reception/add-customer" title="see all coaches" class="btn btn-primary btn-lg btn-block">
						<i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    @endsection