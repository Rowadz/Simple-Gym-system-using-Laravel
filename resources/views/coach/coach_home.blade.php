@extends('layouts.app') @section('title',session('coach')[0]->FIRST_NAME) @section('content')
<div class="container mt-5">
    <div class="jumbotron bg-dark text-muted">
        <h1 class="animated zoomInUp">Welcome {{session('coach')[0]->FIRST_NAME}} <small class="text-warning">-- coach --</small></h1>
        <div class="row">
            <div class="col-md-6 text-info animated rotateInUpLeft">
                <h5>See all your students</h5>
                <a class="btn btn-danger btn-lg btn-block text-white" href="/coach/allSTD"><i class="fa fa-eye fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-warning animated rotateInUpRight">
                <h5>Add exercise</h5>
                <a class="btn btn-primary btn-lg btn-block text-white" href="/coach/exercise"><i class="fa fa-plus fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 text-info animated rotateInUpRight">
                <h5>Add schedule</h5>
                <a class="btn btn-danger btn-lg btn-block text-white" href="#" data-target="#scheduleModel" data-toggle="modal">
        <i class="fa fa-plus fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-warning animated rotateInUpLeft">
                <h5>Add locker</h5>
                <a class="btn btn-primary btn-lg btn-block text-white" href="#" data-target="#lockerModel" data-toggle="modal">
        <i class="fa fa-plus fa-5x" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- Modal to add a schedule -->
        <div class="modal fade  bd-example-modal-lg" id="scheduleModel" tabindex="-1" role="dialog" aria-labelledby="Reception" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="manager-modal-label">Add Schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                    </div>
                    <div class="modal-body">
                        <form id="Schedule_form" action="/coach/add-schedule" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group text-dark">
                                <label for="Sname">Schedule</label>
                                <input type="text" class="form-control" id="Sname" placeholder="Schedule name" name="Schedule_name">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="button" class="btn btn-danger btn-lg">Add!!</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Schedule modal end -->

        <!-- Locker modal  -->
        <div class="modal fade  bd-example-modal-lg" id="lockerModel" tabindex="-1" role="dialog" aria-labelledby="Reception" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="manager-modal-label">Add Locker</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                    </div>
                    <div class="modal-body">
                        <form id="Locker_form" action="/coach/add-locker" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="locker_number">Locker</label>
                                <input type="number" class="form-control" id="locker_name" placeholder="Locker number" name="locker_number">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="button" class="btn btn-info btn-lg">Add!!</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- locker  modal end  -->



    </div>
</div>
@endsection @section('scripts')
<script src="{{asset('js/coach.js')}}"></script>
@endsection