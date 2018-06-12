@extends('layouts.app') @section('title','Rabbit Gym') @section('content') {{--{{ $xx[0]->FIRST_NAME}} --}}


<div class="jumbotron bg-dark text-white">
    <div class="container">
        <h1 class="display-3"><img class="responsive-image" src="{!! asset('images/Rabbit.ico') !!}" style="width: 5%;" /> Rabbit Gym!</h1>
        <p>Sed dignissim dictum luctus. Sed eu venenatis neque. Vestibulum neque nisl, porta non fermentum eu, accumsan vel quam. Aliquam mi eros, iaculis sit amet imperdiet nec, tempor sit amet nisi. Maecenas dictum ex et lorem sagittis gravida. Quisque
            et varius leo, quis finibus dolor. Phasellus sollicitudin, metus et posuere interdum, quam lectus interdum lectus, sed tincidunt dolor purus viverra augue. Sed gravida ante a purus rhoncus congue. Pellentesque ac elit a nunc luctus ullamcorper
            sit amet id sapien.</p>
        <p><a class="btn btn-danger btn-lg animated rubberBand" href="#" id="goToLogin" role="button">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
</a></p>
    </div>
</div>



<div class="row">
    <!-- MANAGER SECTION -->
    <div class="col-xs-3 col-md-3 mt-1 p-3  py-5">
        <div class="card  ">
            <div class="card-block p-1">
                <img class="card-img-top" src="{{asset('images/manager.jpeg')}}" alt="Card image cap">
                <p class="card-text text-justify">Lorem ipsum dolor sit amet massa nunc.</p>
                <!-- This will trigger the modal -->
                <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#manager-modal">Manager Login</a>
            </div>
        </div>
    </div>

    <!-- Manager Modal -->
    <div class="modal fade  bd-example-modal-lg" id="manager-modal" tabindex="-1" role="dialog" aria-labelledby="Manager" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manager-modal-label">Manger Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            &times;
          </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/manager/login" id="manager_login">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="Pssword">Pssword</label>
                            <input type="password" class="form-control" id="pssword" placeholder="Pssword" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-primary btn-lg">Enter!!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Customer  Section -->
    <div class="col-xs-3 col-md-3 mt-1 p-3  py-5">
        <div class="card  ">
            <div class="card-block p-1">
                <img class="card-img-top" src="{{asset('images/Customer.jpeg')}}" alt="Card image cap">
                <p class="card-text text-justify">Vestibulum aliquet ipsum nisi posuere.</p>
                <a href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#customer-modal">Customer Login</a>
            </div>
        </div>
    </div>
    <div class="modal fade  bd-example-modal-lg" id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="Customer" aria-hidden="true">
        <!-- Customer Login -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manager-modal-label">Customer Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/customer/login" id="customer_login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="cusotmer_phone" placeholder="Phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="customer_password">Pssword</label>
                            <input type="password" name="password" class="form-control" id="customer_password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-warning btn-lg">Enter!!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Reception section -->
    <div class="col-xs-3 col-md-3 mt-1 p-3  py-5">
        <div class="card  ">
            <div class="card-block p-1">
                <img class="card-img-top" src="{{asset('images/reception.jpeg')}}" alt="Card image cap">
                <p class="card-text text-justify">Nunc ornare eu arcu sit amet volutpat.</p>
                <a class="btn btn-success btn-lg" data-target="#reception-modal" data-toggle="modal">Reception Login</a>
            </div>
        </div>
    </div>
    <div class="modal fade  bd-example-modal-lg" id="reception-modal" tabindex="-1" role="dialog" aria-labelledby="Reception" aria-hidden="true">
        <!-- Reception Login -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manager-modal-label">Reception Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="reception/login" id="reception_login">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="Reception_phone" placeholder="Phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="reception_password">Pssword</label>
                            <input type="password" class="form-control" id="reception_password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-success btn-lg">Enter!!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Coach Section -->
    <div class="col-xs-3 col-md-3 mt-1 p-3  py-5">
        <div class="card">
            <div class="card-block p-1">
                <img class="card-img-top" src="{{asset('images/coach.jpeg')}}" alt="Card image cap">
                <p class="card-text text-justify">Curabitur in orci lobortis massa nunc.</p>
                <a class="btn btn-danger btn-lg" data-target="#coach-modal" data-toggle="modal">Coach Login</a>
            </div>
        </div>
    </div>
    <!-- Coach Login -->
    <div class="modal fade  bd-example-modal-lg" id="coach-modal" tabindex="-1" role="dialog" aria-labelledby="Reception" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manager-modal-label">Coach Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           &times;
         </button>
                </div>
                <div class="modal-body">
                    <form id="coach_login" action="/coach/login" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" placeholder="phone number" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="reception_password">Pssword</label>
                            <input type="password" class="form-control" id="reception_password" placeholder="password" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="button" class="btn btn-danger btn-lg">Enter!!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="HereLogin"></div>
@endsection