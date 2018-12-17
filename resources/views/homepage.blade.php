@extends('layouts.app')

@section('content')
    @include('inc.sliders');
    @include('inc.hero');

    <div class="viral-story-blog-post section-padding-0-50">
        <div class="container">
            <div class="row">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">
                        @if(count($posts) >=1)
                        @foreach($posts as $post)
                        <!-- Single Blog Post -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="{{ route('post.display', $post->slug) }}"><img src="{{ asset('images/featured_images/' . $post->path) }}" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="{{ route('category', $post->category->slug) }}" class="post-catagory">{{ $post->category->category }}</a>
                                    <a href="{{ route('post.display', $post->slug) }}" class="post-title">
                                        <h6>{{ $post->title }}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">{{ $post->user->name }}</a></p>
                                        <p class="post-date">{{$post->created_at ? $post->created_at->diffForHumans() : ''}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p>You have not added any post yet!</p>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection