@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1 class="text-center">Sign In</h1>
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email"
                class="form-control" name="email" id="email" aria-describedby="helpEmail" placeholder="email@example.com">
              <small id="helpEmail" class="form-text text-muted">Please Enter your Email Address</small>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="">
            </div>

            <div class="form-group">
                <button type="submit" name="btn" id="btn" class="btn btn-primary" btn-lg btn-block">Login</button>
            </div>

            @include('layouts.msgs')
            
        </form>
    </div>
@endsection