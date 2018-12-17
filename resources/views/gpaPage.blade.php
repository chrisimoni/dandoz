@extends('layouts.app')

@section('content')

<div id="app">

<!-- ##### Viral News Breadcumb Area Start ##### -->
<div class="viral-news-breadcumb-area section-padding-50" >
    <div class="container h-100">
        <div class="row h-100 align-items-center">

            <!-- Breadcumb Area -->
            <div class="col-12 col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('question.showGpaPage') }}">Calculate GPA</a></li>
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
                <gpa-component></gpa-component>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

</div>
@endsection