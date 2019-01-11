@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h1>Register</h1>
            <form action="/register" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="name">Name </label>
                  <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="helpName" placeholder="Your Name" value="{{ Request::old('name')}}">
                  <small id="helpName" class="form-text text-muted">Please Enter your First and Last name!</small>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email"
                    class="form-control" name="email" id="email" aria-describedby="helpEmail" placeholder="example@email.com" value="{{ Request::old('email')}}">
                  <small id="helpEmail" class="form-text text-muted">Please Enter Your Email!</small>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Password Confirmation</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
                @include('layouts.msgs') 

            </form>

    </div>
@endsection