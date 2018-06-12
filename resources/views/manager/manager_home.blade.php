@extends('layouts.app') @section('title',session('manager')[0]->FIRST_NAME) @section('content')
<div class="container mt-5">
    <div class="jumbotron bg-dark ">

        <h1 class="text-danger animated jello">Welcome {{session('manager')[0]->FIRST_NAME}}
            <small class="text-muted">--manager--</small></h1>
        {{--
        <h1>Your phone number is {{session('manager')[0]->Phone}}</h1>
        <h1>Your Password is {{session('manager')[0]->Password}}</h1>
        <h1>Your Password is {{session('manager')[0]->DOB}}</h1>
        <h1>Your Password is {{session('manager')[0]->SALARY}}</h1>
        --}}
        <div class="row ">
            <div class="col-md-6 text-info animated bounceInRight">
                <h4>See all coaches <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/show-all-coaches" title="see all coaches" class="btn btn-warning btn-lg btn-block">
						<i class="fa fa-eye fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-warning animated bounceInLeft">
                <h4>See all Reception staff <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/show-all-receptions" title="See all Reception staff" class="btn btn-info btn-lg btn-block">
						<i class="fa fa-eye fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 text-info animated bounceInRight">
                <h4>Add a coach <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/add-coach" title="Add a coach" class="btn btn-warning btn-lg btn-block">
						<i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-warning animated bounceInLeft">
                <h4>Add a Reception staff <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/add-rece" title="Add a Reception staff" class="btn btn-info btn-lg btn-block">
						<i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 text-info animated bounceInRight">
                <h4>Add Product <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/add-product" title="Add Product" class="btn btn-warning btn-lg btn-block">
						<i class="fa fa-plus fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-warning animated bounceInLeft">
                <h4>Add Machine <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/manager/add-machine" title="Add Machine" class="btn btn-info btn-lg btn-block">
						<i class="fa fa-plus fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection