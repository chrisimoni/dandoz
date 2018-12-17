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


       
        <div class="asked">

            @if(count($sliders) >=1)
            <h4 style="color:black">Home Sliders</h4>
            <small>NOTE: You can only update Slider Texts and Images</small>
            @include('backend.message')
            <table class="table table-striped" width="100%" >
                <thead>
                <tr>
                    <th>#</th>
                    <th width="30%">Name</th>
                    <th>Slider Text</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sn = 0; ?>
                @foreach($sliders as $slider)
                <?php $sn++; ?>
                <tr>
                    <td>{{$sn}}</td>
                    <td>{{ $slider->name }}</td>
                    <td>{{ $slider->slider_text }}</td>
                    <td><a href="{{route('sliders.edit', $slider->id)}}">
                    <span class="label label-success">Update</span></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>You have not added any slider yet!</p>
            @endif
        </div>
      
        
    </div>
</div>
@endsection