@extends('layouts.app') @section('title', 'Add Machine') @section('content')

<div class="container mt-5 ">
    <a href="/manager" class="btn btn-primary mb-1 animated zoomInUp"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated zoomInDown">
        <h1><i class="fa fa-plus" aria-hidden="true"></i> Add Machine</h1>
        <form action="/manager/addmachine" method="post" id="add_machine">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="Mname">Name</label>
                <input type="text" class="form-control" id="Mname" placeholder="Machine name" name="Mname">
            </div>
            <div class="form-group">
                <label for="QTY">Quantity</label>
                <input type="number" class="form-control" id="QTY" placeholder="Machine Quantity" name="QTY">
            </div>
            <div class="form-group">
                <button type="submit" name="button" class="btn btn-primary btn-lg">ADD !!</button>
            </div>
        </form>
    </div>
</div>

@endsection @section('scripts')
<script src="{{asset('js/manager.js')}}"></script>
@endsection