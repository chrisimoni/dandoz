<?php
    $sliders = App\Slider::all();
    $welcome = $sliders[0];
    $gpa = $sliders[1];
    $past_question = $sliders[2];
?>


<!-- ##### Welcome Slide Area Start ##### -->
<div class="welcome-slide-area sliding-sliders">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-slides owl-carousel">

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{ asset('images/slider_images/' . $welcome->file) }}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $welcome->slider_text }}
                                            </a><br>
                                            <a href="#" class="btn btn-primary">About Us</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $gpa->file) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="post-title" style="display:block">
                                                    {{ $gpa->slider_text }}
                                                </a><br>
                                                <a href="{{ route('question.showGpaPage') }}" class="btn btn-primary btn-sm">GPA Calculator</a>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $past_question->file ) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $past_question->slider_text }}
                                            </a><br>
                                            <a href="{{ route('question.show') }}" class="btn btn-primary">Get Past Questions</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{ asset('images/slider_images/' . $gpa->file) }}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $gpa->slider_text }}
                                            </a><br>
                                            <a href="{{ route('question.showGpaPage') }}" class="btn btn-primary">GPA Calculator</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $past_question->file) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="post-title" style="display:block">
                                                    {{ $past_question->slider_text }}
                                                </a><br>
                                                <a href="{{ route('question.show') }}" class="btn btn-primary btn-sm">Get Past Questions</a>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $welcome->file ) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $welcome->slider_text }}
                                            </a><br>
                                            <a href="#" class="btn btn-primary btn-sm">About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{ asset('images/slider_images/' . $past_question->file) }}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $past_question->slider_text }}
                                            </a><br>
                                            <a href="{{ route('question.show') }}" class="btn btn-primary">Get Past Questions</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $welcome->file) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="post-title" style="display:block">
                                                    {{ $welcome->slider_text }}
                                                </a><br>
                                                <a href="#" class="btn btn-primary btn-sm">About Us</a>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $gpa->file ) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $gpa->slider_text }}
                                            </a><br>
                                            <a href="{{ route('question.showGpaPage') }}" class="btn btn-primary btn-sm">GPA Calculator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Slide Area End ##### -->


    <!-- ##### Welcome Slide Area Start ##### -->
<div class="welcome-slide-area static-sliders">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-slides owl-carousel">

                        <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-8">
                                    <!-- Welcome Post -->
                                    <div class="welcome-post">
                                        <img src="{{ asset('images/slider_images/' . $welcome->file) }}" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $welcome->slider_text }}
                                            </a><br>
                                            <a href="#" class="btn btn-primary">About Us</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="welcome-posts--">
                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $gpa->file) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                                <a href="#" class="post-title" style="display:block">
                                                    {{ $gpa->slider_text }}
                                                </a><br>
                                                <a href="{{ route('question.showGpaPage') }}" class="btn btn-primary btn-sm">GPA Calculator</a>
                                            </div>
                                        </div>

                                        <!-- Welcome Post -->
                                        <div class="welcome-post style-2">
                                            <img src="{{ asset('images/slider_images/' . $past_question->file ) }}" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                            <a href="#" class="post-title" style="display:block">
                                            {{ $past_question->slider_text }}
                                            </a><br>
                                            <a href="{{ route('question.show') }}" class="btn btn-primary btn-sm">Get Past Questions</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Slide Area End ##### -->