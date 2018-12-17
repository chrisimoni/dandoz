<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> <a class="navbar-brand" href="{{ route('index') }}">Dandoz</a></h1>         
    </div>
    <div class=" border-bottom">
        
     
       
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="drop-men" >
        <ul class=" nav_1">            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{auth()->user()->name}}<i class="caret"></i></span>
                @if(auth()->user()->file)
                <img src="{{ asset('images/profile_pics/'. auth()->user()->file) }}" style="width:60px; height: 60px;"></a>
                @else
                <img src="{{ asset('images/profile_pics/placeholder.png') }}" style="width:60px; height: 60px;"></a>
                @endif
                <ul class="dropdown-menu " role="menu">
                <li><a href="{{ route('admin.showProfile') }}"><i class="fa fa-user"></i>Profile</a></li>
                <li><a href="{{ route('admin.passwordPage') }}"><i class="fa fa-cog"></i>Change Password</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>            
        </ul>
    </div><!-- /.navbar-collapse -->
    <div class="clearfix"></div>
	  
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
            
                <li>
                    <a href="{{ route('index') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                </li>

                <li>
                    <a href="{{ route('categories.index') }}" class=" hvr-bounce-to-right"><i class="fa fa-list-alt nav_icon "></i><span class="nav-label">Categories</span> </a>
                </li>

                <li>
                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-newspaper-o nav_icon"></i> <span class="nav-label">Posts</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('posts.create') }}" class=" hvr-bounce-to-right"> <i class="fa fa-angle-right nav_icon"></i>Add Post</a></li>
                        <li><a href="{{ route('posts.allposts') }}" class=" hvr-bounce-to-right"><i class="fa fa-angle-right nav_icon"></i>View Posts</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('sliders.index') }}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Sliders</span> </a>
                </li>
            </ul>
        </div>
    </div>
</nav>