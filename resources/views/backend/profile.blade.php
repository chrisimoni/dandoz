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
                <h3><i class="fa fa-user"></i>Profile</h3>
                <div class="profile-bottom-top">
                <div class="col-md-4 profile-bottom-img">
                        @if(auth()->user()->file)
                        <img src="{{ asset('images/profile_pics/'. auth()->user()->file) }}"></a>
                        @else
                        <img src="{{ asset('images/profile_pics/placeholder.png') }}"></a>
                        @endif
                </div>
                <div class="col-md-8 profile-text">
                    <h6>{{ auth()->user()->name }}</h6>
                    <table width="100%">                    
                    <tr>
                    <td>Email</td>
                    <td> :</td>
                    <td>{{ auth()->user()->email }}</td>
                    </tr>
                    @if(auth()->user()->facebook)
                    <tr>
                    <td>Facebook</td>
                    <td> :</td>
                    <td> {{ auth()->user()->facebook }}</td>
                    </tr>
                    @endif
                    @if(auth()->user()->twitter)
                    <tr>
                    <td>Twitter </td>
                    <td> :</td>
                    <td> {{ auth()->user()->twitter }}</td>
                    </tr>
                    @endif
                    @if(auth()->user()->instagram)
                    <tr>
                    <td>Instagram</td>
                    <td> :</td>
                    <td> {{ auth()->user()->instagram }}</td>
                    </tr>
                    @endif
                    @if(auth()->user()->bio)
                    <tr>
                    <td>Bio</td>
                    <td> :</td>
                    <td> {{ auth()->user()->bio }}</td>
                    </tr>
                    @endif
                    </table>
                    
                </div>
                <div class="clearfix"></div>
                </div>
                <div class="profile-bottom-bottom">
                <div class="col-md-4 profile-fo">
                    <a href="{{ route('admin.showProfileEdit', auth()->user()->email) }}" class="pro"><i class="fa fa-plus-circle"></i>Edit Profile</a>
                </div>
                <div class="col-md-4 profile-fo">
                    <a href="{{ route('admin.passwordPage') }}" class="pro1"><i class="fa fa-user"></i>Change Password</a>
                </div>
                <div class="clearfix"></div>
                </div>
                    
                
            </div>
        </div>

    </div>
</div>
@endsection
