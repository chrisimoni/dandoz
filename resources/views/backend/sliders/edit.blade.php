@extends('layouts.adminApp')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
        <!--banner-->	
        <div class="banner">		   
           <h2>
            <a href="{{ route('index') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Sliders</span>
           </h2>
        </div>
        <!--//banner-->
        
        <div class="grid-form">
            <div class="grid-form1">
                <h4 id="forms-example" class="">Update Slider</h4>
                @include('backend.message')
                {!! Form::model($slider, ['method'=>'PATCH', 'action'=>['SliderController@update', $slider->id], 'files'=> true]) !!}
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, ['id'=>'name', 'class'=>'form-control', 'placeholder'=>'Enter slider name', 'disabled']) !!}
                    </div>
                    <div class="form-group">
                        <label for="slider_text">Slider Text</label>
                        {!! Form::text('slider_text', null, ['id'=>'slider_text', 'class'=>'form-control', 'placeholder'=>'Enter a very short description about this slider (Max: 35 chars)', 'required'])!!}
                    </div>
                    <div class="form-group">
                        <label for="slider_image">Slider Image</label>
                        <input type="file" id="slider_image" name="file">
                        <small>Note: Uploading new image will replace the current one</small><br>
                        <small>Image dimension: 1920 x 1080 for sliders sync </small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                {!! Form::close() !!}
            </div>
        </div>
            
        
    </div>
</div>
@endsection