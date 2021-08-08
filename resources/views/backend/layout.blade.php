<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/css/back-end/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/css/back-end/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/back-end/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/css/back-end/_all-skins.min.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Header -->
    @include('backend.header')
    <!-- End Header -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:white;">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin/brand') }}">Home</a></li>
                @yield('content_header')
            </ol>
        </section>
         <!-- End Content Header -->

         <!-- Main Content -->
         <section class="content">
            @yield('content_main')
         </section>
         <!-- End Main Content -->
    </div>
    <!-- Content-wrapper -->

    <!-- Footer -->
    @include('backend.footer')
    <!-- End Footer -->
    
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/back-end/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('js/back-end/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/back-end/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/back-end/adminlte.min.js') }}"></script>
</body>
</html>
