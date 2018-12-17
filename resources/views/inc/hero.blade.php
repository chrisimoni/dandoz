<?php
$news_id = App\Category::where('category', 'News')->first();
$latest_news = App\Post::orderBy('id', 'DESC')->where('category_id', $news_id->id)->take(5)->get();
?>

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides owl-carousel">

                        @foreach($latest_news as $news)
                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="{{ route('post.display', $news->slug) }}">
                                    <img src="{{ asset('images/featured_images/' .$news->path)}}" alt="" style="width:129px; height: 129px;">
                                </a>
                            </div>
                            <div class="post-data">
                                <a href="{{ route('post.display', $news->slug) }}" class="post-title">
                                    <h6>{{ $news->title }}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="#">{{ $news->created_at->diffForHumans() }}</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->
    