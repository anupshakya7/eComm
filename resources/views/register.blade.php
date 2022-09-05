@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row mt-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="register" method="post" class="card p-4">
                <h3>Register Page</h3>
                @csrf
                <div class="mb-3 mt-2">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-2">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Email Address" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>
@endsection