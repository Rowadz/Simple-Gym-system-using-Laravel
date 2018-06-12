@extends('layouts.app') @section('title', 'Add product') @section('content')

<div class="container mt-5">
    <a href="/manager" class="btn btn-primary mb-1 animated bounceInRight"> <i class="fa fa-tachometer" aria-hidden="true"></i> Back to Dashboard</a>
    <div class="jumbotron bg-dark text-white animated bounceInLeft">
        <h1><i class="fa fa-plus" aria-hidden="true"></i> Add Product</h1>
        <form action="/manager/addproduct" method="post" id="add_product">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="Pname">Name</label>
                <input type="text" class="form-control" id="Pname" placeholder="Product name" name="Pname">
            </div>
            <div class="form-group">
                <label for="QTY">Quantity</label>
                <input type="text" class="form-control" id="QTY" placeholder="Product Quantity" name="QTY">
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