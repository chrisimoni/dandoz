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
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="grid-form">
                        <div class="grid-form1">
                            <h4 id="forms-example" class="">Change Password</h4>
                            @include('backend.message')
                            {!! Form::open(['action'=>'AdminController@changePassword']) !!}
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword" id="cpassword" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
