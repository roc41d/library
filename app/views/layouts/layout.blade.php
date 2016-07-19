<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>
            CUIB - Library
            &middot; 
            @section('title') 
            @show
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="{{URL::to('assets')}}/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="{{URL::to('assets')}}/css/app.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]--><!--
        <style type="text/css">
            body  {
                background-image: url("../../images/bg1.jpg");
                background-color: #cccccc;
            }
        </style>
        -->
    </head>
    <body>
        <div class="row">
            <span class="medium-6 medium-centered columns title_page">
                <h3>CUIB LIBRARY MANAGEMENT SYSTEM</h3><hr/>
            </span>
            <!--
            @if(Session::has('alertMessage'))
              <div class="alert alert-dismissable alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{Session::get('alertMessage')}}</strong>
              </div>
              @endif

              @if(Session::has('alertError'))
              <div class="alert alert-dismissable alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{Session::get('alertError')}}</strong>
              </div>
              @endif
              -->

            @yield('content')
            
        </div>

        <script src="{{URL::to('assets')}}/js/jquery.js"></script>
        <script src="{{URL::to('assets')}}/js/bootstrap.min.js"></script>
        <script src="{{URL::to('assets')}}/js/modernizr.js"></script>
        <script src="{{URL::to('assets')}}/js/foundation.js"></script>
    </body>
</html>
