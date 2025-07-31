@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Edit Customer</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('edit.post.customer', $edit->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-label">Name</div>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$edit->name}}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Email</div>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{$edit->email}}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Mobile</div>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="{{$edit->mobile}}">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
