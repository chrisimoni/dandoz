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


       
        <div class="asked">

            @if(count($posts) >=1)
            <h4 style="color:black">All Posts ({{ count($posts) }})</h4>
            @include('backend.message')
            <table class="table table-striped" width="100%" >
                <thead>
                <tr>
                    <th>#</th>
                    <th width="30%">Title</th>
                    <th>Category</th>
                    <th>By</th>
                    <th>Published</th>
                    <th>Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sn = 0; ?>
                @foreach($posts as $post)
                <?php $sn++; ?>
                <tr>
                    <td>{{$sn}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->category }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{$post->created_at ? $post->created_at->diffForHumans() : ''}}</td>
                    <td>{{$post->updated_at ? $post->updated_at->diffForHumans() : ''}}</td>
                    <td><a href="{{route('posts.edit', $post->id)}}"><span class="label label-success">Update</span></a> |
                    <a href="javascript:void(0);" onclick="$(this).find('form').submit();"><span class="label label-danger">Delete</span>
                        <form class="delete" action="{{route('posts.destroy', $post->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">

                        </form>

                    </a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>You have not added any post yet!</p>
            @endif
        </div>
      
        
    </div>
</div>
@endsection