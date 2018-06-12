@extends('layouts.app') @section('title','All receptions') @section('content')
<div class="container mt-5 p-5">
    <div class="row">

        <div class="col-md-6">
            <a href="/manager" class="btn btn-primary mb-1 animated fadeInUpBig"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
        </div>
        <div class="col-md-6">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search not working :(">

            </form>
        </div>
    </div>
    <h1>All Reception employees</h1>
    <table class="table table-dark  table-striped animated rotateInDownLeft">
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
            @foreach ($receptions as $reception)
            <tr class="to_delete">
                <td>{{ $reception->FIRST_NAME }}</td>
                <td>{{ $reception->MIDDLE_NAME }}</td>
                <td>{{ $reception->LAST_NAME }}</td>
                <td>{{ $reception->DOB }}</td>
                <td>{{ $reception->SEX }}</td>
                <td>{{ $reception->SALARY}}</td>
                <td>{{ $reception->Phone}}</td>
                <td>{{ $reception->Password}}</td>

                <td> <button class="btn btn-danger deleteBTN_rece" id="{{$reception->ID}}"><i class="fa fa-times" aria-hidden="true"></i></button> </td>
                <td> <button class="btn btn-warning EditBTN_rece" id="{{$reception->ID}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection @section('scripts')
<script src="{{asset('js/manager.js')}}"></script>
@endsection