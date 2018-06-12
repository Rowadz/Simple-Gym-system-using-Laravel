@extends('layouts.app') @section('title', 'Add customer') @section('content')
<div class="container mt-5">
    <a href="/reception" class="btn btn-primary mb-1 animated bounce"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated zoomInDown">

        <h1><i class="fa fa-user-plus" aria-hidden="true"></i> Add a customer</h1>
        <form id="add_customer" action="/reception/addcustomer" method="POST">
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
                <label for="TAX">TAX</label>
                <select name="TAX" id="TAX" class="form-control">
          <option value="100">1 month 100jd</option>
          <option value="200">2 months 200jd</option>
          <option value="500">6 monthos 500jd</option>
          <option value="700">1 year 700jd</option>
        </select>
            </div>
            <div class="form-group ">
                <label for="PAIDTAX">Paid tax</label>
                <input type="number" class="form-control" id="PAIDTAX" placeholder="moeny $$" name="PAIDTAX">
            </div>
            <div class="form-group ">
                <label for="WEIGHT">weight</label>
                <input type="number" class="form-control" id="WEIGHT" placeholder="WEIGHT" name="WEIGHT">
            </div>
            <div class="form-group ">
                <label for="HIEGHT">hieght</label>
                <input type="number" class="form-control" id="HIEGHT" placeholder="hieght" name="HIEGHT">
            </div>
            <div class="form-group">
                <label for="VIP">VIP this will increase the tax by 20 JD</label>
                <select name="VIP" id="VIP" class="form-control">
          <option value="0">NO</option>
          <option value="1">YES</option>
        </select>
            </div>
            <div class="form-group">
                <label for="TRAINER_ID">coaches</label>
                <select name="TRAINER_ID" id="TRAINER_ID" class="form-control">
          @foreach ($coaches as $coach)
            <option value="{{$coach->ID}}">{{$coach->FIRST_NAME . ' '. $coach->LAST_NAME}}</option>}
          @endforeach
        </select>
            </div>
            <div class="form-group ">
                <label for="PHONE">phone</label>
                <input type="number" class="form-control" id="PHONE" placeholder="The phone number" name="phone">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="al least 6 characters" name="password">
            </div>
            <button type="submit" name="button" class="btn btn-primary btn-lg">ADD !!</button>
        </form>
    </div>
</div>
@endsection @section('scripts')
<script src="{{asset('js/reception.js')}}"></script>
@endsection