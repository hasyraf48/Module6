<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accountant</title>
        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">
        <!-- Css -->
        <link href="{{ URL::asset('css/jsgrid.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/jsgrid-theme.min.css') }}" rel="stylesheet" type="text/css">
        <!-- script -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jsgrid.min.js') }}"></script>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"></i> <span>Account</span></a>
                        </div>
                        <div class="clearfix"></div>
                        @yield('content')
                    </div>
                </div>
                <!-- jQuery -->
                <script src="vendors/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- FastClick -->
                <script src="vendors/fastclick/lib/fastclick.js"></script>
                <!-- NProgress -->
                <script src="vendors/nprogress/nprogress.js"></script>
                
                <!-- Custom Theme Scripts -->
                <script src="build/js/custom.min.js"></script>
            </body>
        </html>