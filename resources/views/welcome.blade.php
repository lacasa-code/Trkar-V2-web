<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard Trker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Trker" name="description" />
        <meta content="Trker" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
           <!-- icons -->
           <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/bootstrap-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet"  />
        <link href="{{asset('assets/css/app-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"   />    
        

    </head>

<!-- body start -->

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <div id="app">
            <nav-bar-header />
        </div>


        <!-- ========== Left Sidebar Start ========== -->
        <div id="leftSideMenu">
            <left-side-menu />
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
            <content-page />
     
    </div>
    <!-- END wrapper -->

       <!-- Vendor js -->
       <script src="{{asset('assets/js/vendor.min.js')}}"></script>

       <!-- Plugins js-->
       <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
       <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
       <script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>
       <!-- Dashboar 1 init js-->
       <script src="{{asset('assets/js/pages/dashboard-1.init.js')}}"></script>

       <!-- App js-->
       <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
