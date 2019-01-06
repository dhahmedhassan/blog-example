<div class="blog-post">
    <h2 class="blog-post-title"> {{ $post->title }} </h2>
    <p class="blog-post-meta">{{$post->updated_at}} by <a href="#">{{$post->author}}</a></p>

    {{$post->body}}
</div><!-- /.blog-post -->
