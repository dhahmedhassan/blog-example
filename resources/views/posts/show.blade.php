@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2 class="blog-post-title">
                    {{ $post->title }} 
            </h2>
            <p class="blog-post-meta">{{ $post->updated_at->toFormattedDateString() }} by <a href="#">{{$post->author}}</a></p>
        <hr>
        <p>
            {{$post->body}}
        </p>

    </div>
@endsection