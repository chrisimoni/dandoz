@extends('layouts.adminApp')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
        <!--banner-->	
        <div class="banner">		   
           <h2>
            <a href="{{ route('index') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Posts</span>
           </h2>
        </div>
        <!--//banner-->
        
        <div class="grid-form">
            <div class="grid-form1">
                <h4 id="forms-example" class="">Add Post</h4>
                @include('backend.message')
                {!! Form::open(['action'=>'PostController@store', 'files'=> true]) !!}
                    <div class="form-group">
                        <label for="title">Title</label>
                        {!! Form::text('title', null, ['id'=>'title', 'class'=>'form-control', 'placeholder'=>'Enter post title', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {!! Form::textarea('description', null, ['id'=>'description', 'class'=>'form-control', 'rows'=>4, 'placeholder'=>'Enter a very short description about this post (Max: 160 chars)', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category') !!}
                        {!! Form::select('category_id', [''=> 'Select'] + $categories , null, ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                        <input type="file" id="featured_image" name="featured_image" required>
                        <small>Image dimension: 1920 x 1080 (it will scale to different shapes) </small>
                    </div>
                    <div class="form-group">
                        <label for="post_content">Content</label>
                        {!! Form::textarea('post_content', null, ['class'=>'form-control rich-editor', 'rows'=>10])!!}
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                {!! Form::close() !!}
            </div>
        </div>
            
        
    </div>
</div>
@endsection