@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Add Customer</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('add.customer')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-label">Name</div>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Email</div>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Mobile</div>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
