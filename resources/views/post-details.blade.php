@extends('layouts.app')

@section('content')

<!-- ##### Viral News Breadcumb Area Start ##### -->
<div class="viral-news-breadcumb-area section-padding-50" >
    <div class="container h-100">
        <div class="row h-100 align-items-center">

            <!-- Breadcumb Area -->
            <div class="col-12 col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category', $post->category->slug) }}">{{ $post->category->category }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article</li>
                    </ol>
                </nav>
            </div>

            <!-- Add Widget -->
            <div class="col-12 col-md-8">
                <div class="add-widget">
                    <a href="#"><img src="{{ asset('images/add2.png') }}" alt="Image"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Viral News Breadcumb Area End ##### -->

 <!-- ##### Blog Area Start ##### -->
 <div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post-details">
                        <div class="post-thumb">
                            <img src="{{ asset('images/featured_images/' . $post->path )}}" alt="">
                        </div>
                        <div class="post-data">
                            <a href="{{ route('category', $post->category->slug) }}" class="post-catagory">{{ $post->category->category }}</a>
                            <h3 class="post-title">{{ $post->title }}</h3>
                            <div class="post-meta">

                                <!-- Post Details Meta Data -->
                                <div class="post-details-meta-data mb-50 d-flex align-items-center justify-content-between">
                                    <!-- Post Author & Date -->
                                    <div class="post-authors-date">
                                        <p class="post-author">By <a href="#">{{ $post->user->name }}</a></p>
                                        <p class="post-date">{{$post->created_at ? $post->created_at->diffForHumans() : ''}}</p>
                                    </div>
                                </div>

                                {!! $post->content !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ##### Blog Area End ##### -->
@endsection