@extends('layouts.adminApp')

@section('content')
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
        <!--banner-->	
        <div class="banner">		   
           <h2>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Profile</span>
           </h2>
        </div>
        <!--//banner-->
    
        <div class=" profile">
            <div class="profile-bottom" style="width: 80%;">
                <div class="grid-form">
                    <div class="grid-form1">
                        <h4 id="forms-example" class="">Update Profile</h4>
                        @include('backend.message')
                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminController@updateProfile', $user->email], 'files'=> true]) !!}
                            <div class="form-group">
                                <label for="email">Email</label>
                                {!! Form::email('email', null, ['id'=>'email', 'class'=>'form-control', 'disabled']) !!}
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                {!! Form::text('name', null, ['id'=>'name', 'class'=>'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook URL</label>
                                {!! Form::text('facebook', null, ['id'=>'facebook', 'class'=>'form-control', 'placeholder'=>'Enter facebook profile url, e.g: facebook.com/john-doe']) !!}
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter URL</label>
                                {!! Form::text('twitter', null, ['id'=>'twitter', 'class'=>'form-control', 'placeholder'=>'Enter twitter profile url']) !!}
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram URL</label>
                                {!! Form::text('instagram', null, ['id'=>'instagram', 'class'=>'form-control', 'placeholder'=>'Enter instagram profile url']) !!}
                            </div>
                            <div class="form-group">
                                <label for="profile_pic">Profile Pic</label>
                                <input type="file" id="profile_pic" name="profile_pic">
                                <small>Note: Uploading new image will replace the current one</small>
                                <small>Image dimension: 150 x 150 (it will scale to different shapes) </small>
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                {!! Form::textarea('bio', null, ['class'=>'form-control', 'rows'=>10])!!}
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection
