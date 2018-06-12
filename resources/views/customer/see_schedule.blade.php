@extends('layouts.app') @section('title', 'schedule') @section('content')
<div class="container mt-5">
    <a href="/customer/see-schedule" class="btn btn-primary mb-1 animated bounce"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i> Back to Schedules</a>
    <div class="jumbotron bg-dark text-white">
        <h1>Exercises in the schedule</h1>
        @if (sizeof($exercises))
        <table class="table table-dark table-striped animated zoomInDown">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>CALORIES</th>
                    <th>DESCRIPTION</th>
                    <th>MACHINE PAR-CODE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exercises as $exercise)

                <tr>
                    <td>{{ $exercise->NAME}}</td>
                    <td>{{ $exercise->CALORIES}}</td>
                    <td>{{ $exercise->DESCRIPTION}}</td>
                    <td>000{{ $exercise->MACHINE_ID}}</td>
                </tr>
                @endforeach
            </tbody>
            @else
            <h1>no data</h1>
            @endif

        </table>
    </div>
</div>
@endsection