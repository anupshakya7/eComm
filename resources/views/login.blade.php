@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row mt-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form class="card p-4">
                <h3>Login Page</h3>
                <div class="mb-3 mt-2">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>
@endsection