@extends('layouts.adminApp')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
        <!--banner-->	
        <div class="banner">		   
           <h2>
            <a href="{{ route('index') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Categories</span>
           </h2>
        </div>
        <!--//banner-->

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="grid-form">
                        <div class="grid-form1">
                            <h4 id="forms-example" class="">Update Category</h4>
                            @include('backend.message')
                            {!! Form::model($cat, ['method'=>'PATCH', 'action'=>['CategoryController@update', $cat->id]]) !!}
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    {!! Form::text('category', null, ['class'=>'form-control', 'placeholder'=>'Enter Category', 'required']) !!}
                                </div>
                                <button type="submit" class="btn btn-default">Update</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection