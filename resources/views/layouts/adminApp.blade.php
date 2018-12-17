<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('dashboard/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('dashboard/css/font-awesome.css')}}" rel="stylesheet"> 
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"> </script>
    <!-- Mainly scripts -->
    <script src="{{ asset('dashboard/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom and plugin javascript -->
    <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('dashboard/js/custom.js')}}"></script>

    <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
          tinymce.init({
              selector: "textarea.rich-editor",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>

    <title>{{ config('app.name', 'Dandoz') }}</title>

    <!--skycons-icons-->
    <script src="{{ asset('dashboard/js/skycons.js') }}"></script>
    <!--//skycons-icons-->
</head>
<body>
    <div id="wrapper">
    @include('inc.adminNav');

    @yield('content')
        
    </div>

    <!-- Scripts -->
    
    <!--scrolling js-->
	<script src="{{ asset('dashboard/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('dashboard/js/scripts.js') }}"></script>
	<!--//scrolling js-->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"> </script>
    
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 5000);

        $(".delete").on("submit", function(){
            return confirm("Are you sure you want to remove this record and all its related data?");
        });
            
        });
    </script>

</body>
</html>
