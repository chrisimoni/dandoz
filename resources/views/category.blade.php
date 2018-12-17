@extends('layouts.app')

@section('content')
<div style="min-height: 600px;">
<!-- ##### Breadcumb Area Start ##### -->
<div class="viral-news-breadcumb-area section-padding-50">
    <div class="container h-100">
        <div class="row h-100 align-items-center">

            <!-- Breadcumb Area -->
            <div class="col-12 col-md-4">
                <h3>{{ $cat->category }}</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $cat->category }}</li>
                    </ol>
                </nav>
            </div>

            <!-- Add Widget -->
            <div class="col-12 col-md-8">
                <div class="add-widget">
                    <a href="#"><img src="{{ asset('images/add2.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

@if( $featured_post )
<!-- ##### Blog Area Start ##### -->


<div class="blog-area section-padding-50">
    <!-- Catagory Featured Post -->
    <div class="catagory-featured-post section-padding-50">
        <div class="container">
            <div class="row">
                <!-- Catagory Thumbnail -->
                <div class="col-12 col-md-7">
                    <div class="cata-thumbnail">
                        <a href="{{ route('post.display', $featured_post->slug) }}">
                        <img src="{{ asset('images/featured_images/' . $featured_post->path ) }}" alt="Image">
                        </a>
                    </div>
                </div>
                <!-- Catagory Content -->
                <div class="col-12 col-md-5">
                    <div class="cata-content">
                        <a href="{{ route('category', $featured_post->category->slug) }}" class="post-catagory">{{ $featured_post->category->category }}</a>

                        <a href="{{ route('post.display', $featured_post->slug) }}"><h2>{{ $featured_post->title }}</h2></a>

                        <div class="post-meta">
                            <p class="post-author">By <a href="#">{{ $featured_post->user->name }}</a></p>
                            <p class="post-date">{{ $featured_post->created_at->diffForHumans() }}</p>
                        </div>
                        <p class="post-excerp">{!! str_limit($featured_post->description, 160) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">
                <div class="row">
                    @if(count($posts) >= 0)
                    @foreach($posts as $post)
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post style-3">
                            <!-- Post Thumb -->
                            <div class="post-thumb">
                                <a href="{{ route('post.display', $post->slug) }}"><img src="{{ asset('images/featured_images/' . $post->path )}}" alt=""></a>
                            </div>
                            <!-- Post Data -->
                            <div class="post-data">
                                <a href="{{ route('category', $post->category->slug) }}" class="post-catagory">{{ $post->category->category }}</a>
                                <a href="{{ route('post.display', $post->slug) }}" class="post-title">
                                    <h6>{{ $post->title }}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{ $post->user->name }}</a></p>
                                    <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ##### Blog Area End ##### -->
@else
    <div class="alert alert-info" style="font-size: 12px; padding: 20px; margin-top: 30px;">
        No Post under this Category at the moment!
    </div>

@endif

</div>
@endsection