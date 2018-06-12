@extends('layouts.app') @section('title','Add exercise') @section('content')

<div class="container mt-5">
    <a href="/coach" class="btn btn-primary mb-1 animated bounce"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated zoomInDown">
        <h1><i class="fa fa-plus" aria-hidden="true"></i> Add Exercise</h1>
        <form action="/coach/add-exercise" method="POST" id="add_exercise">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="NAME">Exercise name</label>
                <input type="text" id="NAME" class="form-control" placeholder="Exercise name" name="exercise_name">
            </div>
            <div class="form-group">
                <label for="CALORIES">Calories</label>
                <input type="number" id="CALORIES" class="form-control" placeholder="Calories the exercise will burn" name="calories">
            </div>
            <div class="form-group">
                <label for="DESCRIPTION">Description</label>
                <textarea id="DESCRIPTION" class="form-control" placeholder="Information about the Exercise" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="machine">Select a Machine</label>
                <select class="form-control" id="machine" name="machine">

					@foreach ($machines as $machine)
						<option value="{{$machine->PAR_CODE}}">{{$machine->NAME}}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
                <label for="Schedule">Select a Schedule</label>
                <select class="form-control" id="Schedule" name="schedule">

					@foreach ($schedules as $schedule)
						<option value="{{$schedule->ID}}">{{$schedule->NAME}}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">ADD !!</button>
            </div>
        </form>
    </div>
</div>
@endsection @section('scripts')
<script src="{{asset('js/coach.js')}}"></script>
@endsection