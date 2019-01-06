@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Publish a Post</h1>
        <hr>
        
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>
        </form>

        @if (count($errors->all()) > 0)
            <div class="alert alert-danger form-group">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
        
        @endsection