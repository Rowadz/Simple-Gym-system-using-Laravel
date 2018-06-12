@extends('layouts.app') @section('title', session('customer')[0]->FIRST_NAME) @section('content')
<div class="container mt-5">
    <a href="/customer" class="btn btn-primary mb-1 animated bounce"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <h1>Your Basic informations</h1>
    <div class="jumbotron bg-dark text-white animated zoomInDown">

        <div class="form-group row">
            <label for="FNAME" class="col-2 col-form-label">First name</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="FNAME" value="{{$basic_info[0]->FIRST_NAME}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="MNAME" class="col-2 col-form-label">Middle name</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="MNAME" value="{{$basic_info[0]->MIDDLE_NAME}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="LNAME" class="col-2 col-form-label">Last name</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="LNAME" value="{{$basic_info[0]->LAST_NAME}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="DOB" class="col-2 col-form-label">Date of birth</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="DOB" value="{{$basic_info[0]->DOB}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="SEX" class="col-2 col-form-label">Sex</label>
            <div class="col-10">
                @if ($basic_info[0]->SEX === 'M')
                <input class="form-control" readonly type="text" id="SEX" value="MALE"> @else
                <input class="form-control" readonly type="text" id="SEX" value="FEMALE"> @endif
            </div>

        </div>
        <div class="form-group row">
            <label for="REGISTER_DATE" class="col-2 col-form-label">Register date</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="REGISTER_DATE" value="{{$basic_info[0]->REGISTER_DATE}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="REGISTER_END" class="col-2 col-form-label">Register End date</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="REGISTER_END" value="{{$basic_info[0]->REGISTER_END}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="TAX" class="col-2 col-form-label">TAX</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="TAX" value="{{$basic_info[0]->TAX}} JD">
            </div>
        </div>
        <div class="form-group row">
            <label for="PAID_TAX" class="col-2 col-form-label">PAID TAX</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="PAID_TAX" value="{{$basic_info[0]->PAID_TAX}} JD">
            </div>
        </div>
        <div class="form-group row">
            <label for="LEFT_TAX" class="col-2 col-form-label text-danger">LEFT TAX</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="LEFT_TAX" value="{{$basic_info[0]->TAX - $basic_info[0]->PAID_TAX}} JD">
            </div>
        </div>
        <div class="form-group row">
            <label for="WEIGHT" class="col-2 col-form-label">Weight</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="WEIGHT" value="{{$basic_info[0]->WEIGHT}} KG">
            </div>
        </div>
        <div class="form-group row">
            <label for="HIEGHT" class="col-2 col-form-label">Height</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="HIEGHT" value="{{$basic_info[0]->HIEGHT}} cm">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-2 col-form-label">Phone</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="Phone" value="{{$basic_info[0]->Phone}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Password" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="Password" value="{{$basic_info[0]->Password}}">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="Password" class="col-2 col-form-label text-warning">Coach name</label>
            <div class="col-10">
                <input class="form-control" readonly type="text" id="Password" value="{{$coach_name[0]->FIRST_NAME .' '.  $coach_name[0]->MIDDLE_NAME .' '. $coach_name[0]->LAST_NAME}}">
            </div>
        </div>
    </div>
</div>
@endsection