@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <form action="login" method="POST">
                    @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-primary form-control">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection