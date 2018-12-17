<?php
$slug = basename($_SERVER['REQUEST_URI']);
$all_cats = App\Category::where('category', '!=', 'Uncategorized')->take(5)->get();
?>
<!-- ##### Header Area Start ##### -->
<header class="header-area" style="margin-bottom: -20px;">

<!-- Navbar Area -->
<div class="viral-news-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            @if(count($all_cats) >= 1)
                            @foreach($all_cats as $c)
                            <li class="{{ $slug === $c->slug ? 'active' : ''}}"><a href="{{ route('category', $c->slug)}}">{{ $c->category }}</a></li>
                            @endforeach
                            @endif
                            <li class="{{ $slug == 'get-past-questions' ? 'active' : ''}}"><a href="{{ route('question.show') }}">Past Questions</a></li>
                            <li class="{{ $slug == 'gpa-calculator' ? 'active' : ''}}"><a href="{{ route('question.showGpaPage') }}">GPA Calculator</a></li>
                        </ul>

                        <!-- Search Button -->
                        <div class="search-btn">
                            <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                        </div>

                        <!-- Search Form -->
                        <div class="viral-search-form">
                            <form id="search" action="#" method="get">
                                <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- ##### Header Area End ##### -->