@extends('layouts.app') @section('title',session('customer')[0]->FIRST_NAME) @section('content')
<div class="container mt-5">
    <div class="jumbotron  bg-dark text-white">
        <h1 class="animated bounceIn text-danger">Welcome {{session('customer')[0]->FIRST_NAME}} <small class="text-muted">--customer--</small></h1>
        {{--
        <h1>Your phone number is {{session('customer')[0]->Phone}}</h1>
        <h1>Your Password is {{session('customer')[0]->Password}}</h1>
        <h1>Your Password is {{session('customer')[0]->DOB}}</h1>
        --}}
        <div class="row">
            <div class="col-md-6 text-info animated lightSpeedIn">
                <h4>See all Schedules <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/customer/see-schedule" class="btn btn-warning btn-lg btn-block"><i class="fa fa-grav fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 text-info animated zoomInLeft">
                @if (sizeof($lockers) === 1)
                <h4>Your Locker number is {{$lockers[0]->NUMBER}} <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="#" class="btn btn-warning btn-lg btn-block"><i class="fa fa-unlock fa-5x" aria-hidden="true"></i>
          
      </a> @else
                <h4>Select a Locker <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="#" class="btn btn-warning btn-lg btn-block" data-target="#lockerModel" data-toggle="modal" id="disableWhenChoose"><i class="fa fa-lock fa-5x" aria-hidden="true"></i></a> @endif

            </div>
        </div>
        <div class="row mt-5 text-info">
            <div class="col-md-6 animated lightSpeedIn">
                <h4>See Your Basic info <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                <a href="/customer/basic-info" class="btn btn-warning btn-lg btn-block"><i class="fa fa-info-circle fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6">
                <!-- <h4>See all Schedules <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
        <a href="/customer/see-schedule" class="btn btn-warning btn-lg btn-block"><i class="fa fa-grav fa-5x" aria-hidden="true"></i></a> -->
            </div>
        </div>

    </div>
    @if (sizeof($lockers) >= 2)
    <!-- Locker modal  -->
    <div class="modal fade  bd-example-modal-lg" id="lockerModel" tabindex="-1" role="dialog" aria-labelledby="Reception" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manager-modal-label">Select Locker</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                </div>
                <div class="modal-body">
                    <form id="Locker_form" action="/customer/select-locker" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="locker">Locker</label>
                            <select name="locker_number" id="locker" class="form-control">

                  @foreach ($lockers as $locker)
                    <option value="{{ $locker->ID }}">{{ $locker->NUMBER }}</option>
                  @endforeach
                  
                </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-info btn-lg">select !!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- locker  modal end  -->
    @endif
</div>
@endsection @section('scripts')
<script src="{{asset('js/customer.js')}}"></script>
@endsection