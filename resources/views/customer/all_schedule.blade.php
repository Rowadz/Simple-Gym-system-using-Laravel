@extends('layouts.app') @section('title','select a schedule') @section('content')
<div class="container mt-5">
    <a href="/customer" class="btn btn-primary mb-1 animated bounce"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated zoomInDown">
        <h1>All schedules</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>names</th>
                </tr>
            </thead>
            @foreach ($schedules as $schedule)
            <tr>
                <td>
                    <a href="/customer/see-schedule/{{$schedule->ID}}" class="text-warning">{{$schedule->NAME}}</a>
                </td>
            </tr>
            @endforeach


        </table>
    </div>
</div>
@endsection