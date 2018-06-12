@extends('layouts.app') @section('title','All coaches') @section('content')
<div class="container mt-5 p-5">
    <div class="row">

        <div class="col-md-6">
            <a href="/manager" class="btn btn-primary mb-1 animated rollIn"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
        </div>
        <div class="col-md-6">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search not working :(">

            </form>
        </div>
    </div>
    <h1>All coaches</h1>
    <table class="table table-dark  table-striped ">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Date of birth</th>
                <th>SEX</th>
                <th>Salary</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coaches as $coach)
            <tr class="to_delete animated bounceInRight">
                <td>{{ $coach->FIRST_NAME }}</td>
                <td>{{ $coach->MIDDLE_NAME }}</td>
                <td>{{ $coach->LAST_NAME }}</td>
                <td>{{ $coach->DOB }}</td>
                <td>{{ $coach->SEX }}</td>
                <td>{{ $coach->SALARY}}</td>
                <td>{{ $coach->Phone}}</td>
                <td>{{ $coach->Password}}</td>

                <td> <button class="btn btn-danger deleteBTN" id="{{$coach->ID}}"><i class="fa fa-times" aria-hidden="true"></i></button> </td>
                <td> <button class="btn btn-warning EditBTN" id="{{$coach->ID}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection @section('scripts')
<script src="{{asset('js/manager.js')}}"></script>
@endsection