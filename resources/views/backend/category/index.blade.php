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
                <div class="col-sm-5">
                    <div class="grid-form">
                        <div class="grid-form1">
                            <h4 id="forms-example" class="">Add Category</h4>
                            @include('backend.message')
                            {!! Form::open(['action'=>'CategoryController@store']) !!}
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter category">
                                </div>
                                <button type="submit" class="btn btn-default">Add</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="box box-primary" style="background-color: #fff; padding: 20px 0 10px 0;">
                        <div class="box-header" style="">
                            <h4 class="box-title">Categories</h4>
                        </div>
                        @if(count($categories) >=1)
                        <table class="table table-striped" style="color: rgb(252, 172, 172);">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Categories</th>
                              <th>Date Added</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $sn = 0; ?>
                            @foreach($categories as $cat)
                            <?php $sn++; ?>
                            <tr>
                              <td>{{$sn}}</td>
                              <td>{{$cat->category}}</td>
                              <td>{{$cat->created_at ? $cat->created_at->diffForHumans() : ''}}</td>
                              <td><a href="{{route('categories.edit', $cat->id)}}"><span class="label label-success">Update</span></a> |
                                <a href="javascript:void(0);" onclick="$(this).find('form').submit();"><span class="label label-danger">Delete</span>
                                  <form class="delete" action="{{route('categories.destroy', $cat->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
          
                                  </form>
          
                                </a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        @else
                          <p>You have not added any category yet!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection