@extends('layouts.app') @section('title',"all students") @section('content')
<div class="container mt-5">
    <div class="Jumborton  text-white">
        <h1 class="text-dark">All Students</h1>
        <div class="row">

            <div class="col-md-6">
                <a href="/coach" class="btn btn-primary mb-1 animated bounce"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
            </div>
            <div class="col-md-6">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search not working :(">

                </form>
            </div>
        </div>

        <table class="table table-dark  table-striped animated bounceInRight">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date of birth</th>
                    <th>SEX</th>
                    <th>Register date</th>
                    <th>Register end</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($STD as $student)
                <tr class="to_delete">
                    <td>{{$student->FIRST_NAME}}</td>
                    <td>{{$student->MIDDLE_NAME}}</td>
                    <td>{{$student->LAST_NAME}}</td>
                    <td>{{$student->DOB}}</td>
                    <td>{{$student->SEX}}</td>
                    <td>{{$student->REGISTER_DATE}}</td>
                    <td>{{$student->REGISTER_END}}</td>
                    <td>{{$student->WEIGHT}}</td>
                    <td>{{$student->HIEGHT}}</td>
                    <td>{{$student->Phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection