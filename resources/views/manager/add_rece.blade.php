@extends('layouts.app') @section('title','Add reception') @section('content')
<div class="container mt-5">
    <a href="/manager" class="btn btn-primary mb-1 animated rotateIn"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated zoomIn">

        <h1><i class="fa fa-user-plus" aria-hidden="true"></i> Add a Reception employee</h1>
        <form id="add_reception" action="/manager/add-rece" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="Fname">First name</label>
                <input type="text" class="form-control" id="Fname" placeholder="Frist name" name="fname">
            </div>
            <div class="form-group">
                <label for="Mname">Middle name</label>
                <input type="text" class="form-control" id="Mname" placeholder="Middle name" name="mname">
            </div>
            <div class="form-group">
                <label for="Lname">Last name</label>
                <input type="text" class="form-control" id="Lname" placeholder="Last name" name="lname">
            </div>
            <div class="form-group">
                <label for="DOB">Date of Birth</label>
                <input type="date" class="form-control" id="DOB" placeholder="Another input" name="dob">
            </div>
            <div class="form-group">
                <label for="SEX">Sex</label>
                <select name="SEX" id="SEX" class="form-control">
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
            </div>
            <div class="form-group">
                <label for="SALARY">Salary</label>
                <input type="number" class="form-control" id="SALARY" placeholder="Salary in US Dollar $" name="salary">
            </div>
            <div class="form-group ">
                <label for="PHONE">phone</label>
                <input type="number" class="form-control" id="PHONE" placeholder="The phone number" name="phone">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="al least 6 characters" name="password">
            </div>
            <button type="submit" name="button" class="btn btn-info btn-lg">ADD !!</button>
        </form>
    </div>
</div>
@endsection @section('scripts')
<script src="{{asset('js/manager.js')}}"></script>
@endsection