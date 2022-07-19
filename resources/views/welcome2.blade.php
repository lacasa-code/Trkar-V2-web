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
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/selectize/selectize.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <link href="{{ asset('assets/js/head.js') }}" rel="stylesheet" type="text/css" />


</head>

<!-- body start -->

<body>

    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box dropdown">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home mr-1"></i>
                                        <span>Analytics Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture mr-1"></i>
                                        <span>How can I help you?</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings mr-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="media">
                                                <img class="d-flex mr-2 rounded-circle"
                                                    src="http://127.0.0.1:8000/assets/images/users/user-2.jpg"
                                                    alt="Generic placeholder image" height="32">
                                                <div class="media-body">
                                                    <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="media">
                                                <img class="d-flex mr-2 rounded-circle"
                                                    src="http://127.0.0.1:8000/assets/images/users/user-5.jpg"
                                                    alt="Generic placeholder image" height="32">
                                                <div class="media-body">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                            href="#">
                            <i class="fe-maximize noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-grid noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-right">

                            <div class="p-lg-1">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/slack.png"
                                                alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/github.png"
                                                alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/dribbble.png"
                                                alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/bitbucket.png"
                                                alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/dropbox.png"
                                                alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="http://127.0.0.1:8000/assets/images/brands/g-suite.png"
                                                alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="http://127.0.0.1:8000/assets/images/flags/us.jpg" alt="user-image"
                                height="16">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="http://127.0.0.1:8000/assets/images/flags/germany.jpg" alt="user-image"
                                    class="mr-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="http://127.0.0.1:8000/assets/images/flags/italy.jpg" alt="user-image"
                                    class="mr-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="http://127.0.0.1:8000/assets/images/flags/spain.jpg" alt="user-image"
                                    class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="http://127.0.0.1:8000/assets/images/flags/russia.jpg" alt="user-image"
                                    class="mr-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper"
                                                style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">

                                                    <!-- item-->
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item notify-item active">
                                                        <div class="notify-icon">
                                                            <img src="http://127.0.0.1:8000/assets/images/users/user-1.jpg"
                                                                class="img-fluid rounded-circle" alt="">
                                                        </div>
                                                        <p class="notify-details">Cristina Pride</p>
                                                        <p class="text-muted mb-0 user-msg">
                                                            <small>Hi, How are you? What about our next meeting</small>
                                                        </p>
                                                    </a>

                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                                            <small class="text-muted">1 min ago</small>
                                                        </p>
                                                    </a>

                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon">
                                                            <img src="http://127.0.0.1:8000/assets/images/users/user-4.jpg"
                                                                class="img-fluid rounded-circle" alt="">
                                                        </div>
                                                        <p class="notify-details">Karen Robinson</p>
                                                        <p class="text-muted mb-0 user-msg">
                                                            <small>Wow ! this admin looks good and awesome
                                                                design</small>
                                                        </p>
                                                    </a>

                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon bg-warning">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                        <p class="notify-details">New user registered.
                                                            <small class="text-muted">5 hours ago</small>
                                                        </p>
                                                    </a>

                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                                            <small class="text-muted">4 days ago</small>
                                                        </p>
                                                    </a>

                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                        <div class="notify-icon bg-secondary">
                                                            <i class="mdi mdi-heart"></i>
                                                        </div>
                                                        <p class="notify-details">Carlos Crouch liked
                                                            <b>Admin</b>
                                                            <small class="text-muted">13 days ago</small>
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="http://127.0.0.1:8000/assets/images/users/user-1.jpg" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Admin <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->

                            <a class="dropdown-item notify-item" href="http://127.0.0.1:8000/logout"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>

                            </a>

                            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST">
                                <input type="hidden" name="_token"
                                    value="zcqnqgjAbqAVg1ypbyrzvqFzqCSipaRCJZYVqyC0">
                            </form>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="http://127.0.0.1:8000/dashboard" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="http://127.0.0.1:8000/assets/images/logo-sm.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="http://127.0.0.1:8000/assets/images/logo-dark.png" alt=""
                                height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="http://127.0.0.1:8000/dashboard" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="http://127.0.0.1:8000/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://127.0.0.1:8000/assets/images/logo-light.png" alt=""
                                height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Create New
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-briefcase mr-1"></i>
                                <span>New Projects</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-user mr-1"></i>
                                <span>Create Users</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-bar-chart-line- mr-1"></i>
                                <span>Revenue Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-settings mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-headphones mr-1"></i>
                                <span>Help &amp; Support</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown dropdown-mega d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Nestable List</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Sliders</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Masonry Items</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Treeview Page</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tour Page</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">eCommerce Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">CRM Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Team Contacts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Task Board</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email Templates</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Left Sidebar with User</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Menu Collapsed</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Small Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">New Header Style</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Search Result</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Gallery Pages</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Maintenance &amp; Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h3 class="text-dark">Special Discount Sale!</h3>
                                        <h4>Save up to 70% off.</h4>
                                        <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100 menuitem-active" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">

                                    <!-- User box -->
                                    <div class="user-box text-center">
                                        <img src="http://127.0.0.1:8000/assets/images/users/user-1.jpg" alt="user-img"
                                            title="Mat Helme" class="rounded-circle avatar-md">
                                        <div class="dropdown">
                                            <a href="javascript: void(0);"
                                                class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                                data-toggle="dropdown">Geneva Kennedy</a>
                                            <div class="dropdown-menu user-pro-dropdown">

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="fe-user mr-1"></i>
                                                    <span>My Account</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="fe-settings mr-1"></i>
                                                    <span>Settings</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="fe-lock mr-1"></i>
                                                    <span>Lock Screen</span>
                                                </a>

                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="fe-log-out mr-1"></i>
                                                    <span>Logout</span>
                                                </a>

                                            </div>
                                        </div>
                                        <p class="text-muted">Admin Head</p>
                                    </div>

                                    <!--- Sidemenu -->
                                    <div id="sidebar-menu">

                                        <ul id="side-menu">

                                            <li class="menu-title">Navigation</li>

                                            <li class="menuitem-active">
                                                <a href="#sidebarDashboards" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-airplay">
                                                        <path
                                                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                                        </path>
                                                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                    </svg>
                                                    <span class="badge badge-success badge-pill float-right">4</span>
                                                    <span> Dashboards </span>
                                                </a>
                                                <div class="collapse show" id="sidebarDashboards">
                                                    <ul class="nav-second-level">
                                                        <li class="menuitem-active">
                                                            <a href="http://127.0.0.1:8000/dashboard"
                                                                class="active">Dashboard 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/dashboard-2">Dashboard 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/dashboard-3">Dashboard 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/dashboard-4">Dashboard 4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="menu-title mt-2">Apps</li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/apps/calendar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg>
                                                    <span> Calendar </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/apps/chat">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-message-square">
                                                        <path
                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                    <span> Chat </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#sidebarEcommerce" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-shopping-cart">
                                                        <circle cx="9" cy="21" r="1">
                                                        </circle>
                                                        <circle cx="20" cy="21" r="1">
                                                        </circle>
                                                        <path
                                                            d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                        </path>
                                                    </svg>
                                                    <span> Ecommerce </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarEcommerce">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ecommerce/dashboard">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ecommerce/products">Products</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ecommerce/product-detail">Product
                                                                Detail</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ecommerce/product-edit">Add
                                                                Product</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ecommerce/customers">Customers</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ecommerce/orders">Orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ecommerce/order-detail">Order
                                                                Detail</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ecommerce/sellers">Sellers</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ecommerce/cart">Shopping
                                                                Cart</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ecommerce/checkout">Checkout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarCrm" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-users">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4">
                                                        </circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                    <span> CRM </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarCrm">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/crm/dashboard">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/crm/contacts">Contacts</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/crm/opportunities">Opportunities</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/crm/leads">Leads</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/crm/customers">Customers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarEmail" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg>
                                                    <span> Email </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarEmail">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/email/inbox">Inbox</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/email/read">Read Email</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/email/compose">Compose
                                                                Email</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/email/templates">Email
                                                                Templates</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/apps/social-feed">
                                                    <span class="badge badge-pink float-right">Hot</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-rss">
                                                        <path d="M4 11a9 9 0 0 1 9 9"></path>
                                                        <path d="M4 4a16 16 0 0 1 16 16"></path>
                                                        <circle cx="5" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                    <span> Social Feed </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/apps/companies">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                    <span> Companies </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#sidebarProjects" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-briefcase">
                                                        <rect x="2" y="7" width="20"
                                                            height="14" rx="2" ry="2"></rect>
                                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                    </svg>
                                                    <span> Projects </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarProjects">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/project/list">List</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/project/detail">Detail</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/project/create">Create
                                                                Project</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarTasks" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                    <span> Tasks </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarTasks">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/task/list">List</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/task/details">Details</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/task/kanban-board">Kanban
                                                                Board</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarContacts" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-book">
                                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                        <path
                                                            d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">
                                                        </path>
                                                    </svg>
                                                    <span> Contacts </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarContacts">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/contacts/list">Members
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/contacts/profile">Profile</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarTickets" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-aperture">
                                                        <circle cx="12" cy="12" r="10">
                                                        </circle>
                                                        <line x1="14.31" y1="8" x2="20.05"
                                                            y2="17.94"></line>
                                                        <line x1="9.69" y1="8" x2="21.17"
                                                            y2="8"></line>
                                                        <line x1="7.38" y1="12" x2="13.12"
                                                            y2="2.06"></line>
                                                        <line x1="9.69" y1="16" x2="3.95"
                                                            y2="6.06"></line>
                                                        <line x1="14.31" y1="16" x2="2.83"
                                                            y2="16"></line>
                                                        <line x1="16.62" y1="12" x2="10.88"
                                                            y2="21.94"></line>
                                                    </svg>
                                                    <span> Tickets </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarTickets">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tickets/list">List</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tickets/detail">Detail</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/apps/file-manager">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-folder-plus">
                                                        <path
                                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                                        </path>
                                                        <line x1="12" y1="11" x2="12"
                                                            y2="17"></line>
                                                        <line x1="9" y1="14" x2="15"
                                                            y2="14"></line>
                                                    </svg>
                                                    <span> File Manager </span>
                                                </a>
                                            </li>

                                            <li class="menu-title mt-2">Custom</li>

                                            <li>
                                                <a href="#sidebarAuth" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8"
                                                            y2="13"></line>
                                                        <line x1="16" y1="17" x2="8"
                                                            y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                    <span> Auth Pages </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarAuth">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/login">Log In</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/login-2">Log In 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/register">Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/register-2">Register
                                                                2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/signin-signup">Signin -
                                                                Signup</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/signin-signup-2">Signin
                                                                - Signup 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/recoverpw">Recover
                                                                Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/recoverpw-2">Recover
                                                                Password 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/lock-screen">Lock
                                                                Screen</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/lock-screen-2">Lock
                                                                Screen 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/logout">Logout</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/logout-2">Logout 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/confirm-mail">Confirm
                                                                Mail</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/auth/confirm-mail-2">Confirm
                                                                Mail 2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarExpages" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-package">
                                                        <line x1="16.5" y1="9.4" x2="7.5"
                                                            y2="4.21"></line>
                                                        <path
                                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                        </path>
                                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                        <line x1="12" y1="22.08" x2="12"
                                                            y2="12"></line>
                                                    </svg>
                                                    <span> Extra Pages </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarExpages">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/starter">Starter</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/timeline">Timeline</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/sitemap">Sitemap</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/invoice">Invoice</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/faqs">FAQs</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/search-results">Search
                                                                Results</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/pricing">Pricing</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/pages/maintenance">Maintenance</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/coming-soon">Coming
                                                                Soon</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/gallery">Gallery</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/404">Error 404</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/404-two">Error 404
                                                                Two</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/404-alt">Error
                                                                404-alt</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/500">Error 500</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/pages/500-two">Error 500
                                                                Two</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarLayouts" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-layout">
                                                        <rect x="3" y="3" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="3" y1="9" x2="21"
                                                            y2="9"></line>
                                                        <line x1="9" y1="21" x2="9"
                                                            y2="9"></line>
                                                    </svg>
                                                    <span class="badge badge-blue float-right">New</span>
                                                    <span> Layouts </span>
                                                </a>
                                                <div class="collapse" id="sidebarLayouts">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/layoutsDemo/horizontal">Horizontal</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/layoutsDemo/detached">Detached</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/layoutsDemo/two-column">Two
                                                                Column Menu</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/layoutsDemo/two-tone-icons">Two
                                                                Tones Icons</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/layoutsDemo/preloader">Preloader</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="menu-title mt-2">Components</li>

                                            <li>
                                                <a href="#sidebarBaseui" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-pocket">
                                                        <path
                                                            d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z">
                                                        </path>
                                                        <polyline points="8 10 12 14 16 10"></polyline>
                                                    </svg>
                                                    <span> Base UI </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarBaseui">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/buttons">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/cards">Cards</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/avatars">Avatars</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/portlets">Portlets</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/tabs-accordions">Tabs
                                                                &amp; Accordions</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/modals">Modals</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/progress">Progress</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ui/notifications">Notifications</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/spinners">Spinners</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/images">Images</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/carousel">Carousel</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/list-group">List
                                                                Group</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/video">Embed Video</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/dropdowns">Dropdowns</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/ribbons">Ribbons</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/tooltips-popovers">Tooltips
                                                                &amp; Popovers</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/general">General UI</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/ui/typography">Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/ui/grid">Grid</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarExtendedui" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-layers">
                                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                        <polyline points="2 17 12 22 22 17"></polyline>
                                                        <polyline points="2 12 12 17 22 12"></polyline>
                                                    </svg>
                                                    <span class="badge badge-info float-right">Hot</span>
                                                    <span> Extended UI </span>
                                                </a>
                                                <div class="collapse" id="sidebarExtendedui">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/extended/nestable">Nestable
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/extended/range-slider">Range
                                                                Slider</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/extended/dragula">Dragula</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/extended/animation">Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/extended/sweet-alert">Sweet
                                                                Alert</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/extended/tour">Tour Page</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/extended/scrollspy">Scrollspy</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/extended/loading-buttons">Loading
                                                                Buttons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="http://127.0.0.1:8000/widgets">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-gift">
                                                        <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                                        <rect x="2" y="7" width="20"
                                                            height="5"></rect>
                                                        <line x1="12" y1="22" x2="12"
                                                            y2="7"></line>
                                                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                                    </svg>
                                                    <span> Widgets </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#sidebarIcons" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-cpu">
                                                        <rect x="4" y="4" width="16"
                                                            height="16" rx="2" ry="2"></rect>
                                                        <rect x="9" y="9" width="6"
                                                            height="6"></rect>
                                                        <line x1="9" y1="1" x2="9"
                                                            y2="4"></line>
                                                        <line x1="15" y1="1" x2="15"
                                                            y2="4"></line>
                                                        <line x1="9" y1="20" x2="9"
                                                            y2="23"></line>
                                                        <line x1="15" y1="20" x2="15"
                                                            y2="23"></line>
                                                        <line x1="20" y1="9" x2="23"
                                                            y2="9"></line>
                                                        <line x1="20" y1="14" x2="23"
                                                            y2="14"></line>
                                                        <line x1="1" y1="9" x2="4"
                                                            y2="9"></line>
                                                        <line x1="1" y1="14" x2="4"
                                                            y2="14"></line>
                                                    </svg>
                                                    <span> Icons </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarIcons">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/two-tone">Two Tone
                                                                Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/feather">Feather
                                                                Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/mdi">Material Design
                                                                Icons</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/icons/dripicons">Dripicons</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/font-awesome">Font
                                                                Awesome 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/themify">Themify</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/simple-line">Simple
                                                                Line</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/icons/weather">Weather</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarForms" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-bookmark">
                                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                    <span> Forms </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarForms">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/elements">General
                                                                Elements</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/forms/advanced">Advanced</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/forms/validation">Validation</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/pickers">Pickers</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/wizard">Wizard</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/masks">Masks</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/forms/summernote">Summernote</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/quilljs">Quilljs
                                                                Editor</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/file-uploads">File
                                                                Uploads</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/x-editable">X
                                                                Editable</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/forms/image-crop">Image
                                                                Crop</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarTables" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-grid">
                                                        <rect x="3" y="3" width="7"
                                                            height="7"></rect>
                                                        <rect x="14" y="3" width="7"
                                                            height="7"></rect>
                                                        <rect x="14" y="14" width="7"
                                                            height="7"></rect>
                                                        <rect x="3" y="14" width="7"
                                                            height="7"></rect>
                                                    </svg>
                                                    <span> Tables </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarTables">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/basic">Basic
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/datatables">Data
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/editable">Editable
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/responsive">Responsive
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="http://127.0.0.1:8000/tables/footables">FooTable</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/bootstrap">Bootstrap
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/tablesaw">Tablesaw
                                                                Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/tables/jsgrid">JsGrid
                                                                Tables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarCharts" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-bar-chart-2">
                                                        <line x1="18" y1="20" x2="18"
                                                            y2="10"></line>
                                                        <line x1="12" y1="20" x2="12"
                                                            y2="4"></line>
                                                        <line x1="6" y1="20" x2="6"
                                                            y2="14"></line>
                                                    </svg>
                                                    <span> Charts </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarCharts">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/apex">Apex
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/flot">Flot
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/morris">Morris
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/chartjs">Chartjs
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/peity">Peity
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/chartist">Chartist
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/c3">C3 Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/sparklines">Sparklines
                                                                Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/charts/knob">Jquery Knob
                                                                Charts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarMaps" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-map">
                                                        <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6">
                                                        </polygon>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="18"></line>
                                                        <line x1="16" y1="6" x2="16"
                                                            y2="22"></line>
                                                    </svg>
                                                    <span> Maps </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMaps">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/maps/google">Google
                                                                Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/maps/vector">Vector
                                                                Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://127.0.0.1:8000/maps/mapael">Mapael
                                                                Maps</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#sidebarMultilevel" data-toggle="collapse">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-share-2">
                                                        <circle cx="18" cy="5" r="3">
                                                        </circle>
                                                        <circle cx="6" cy="12" r="3">
                                                        </circle>
                                                        <circle cx="18" cy="19" r="3">
                                                        </circle>
                                                        <line x1="8.59" y1="13.51" x2="15.42"
                                                            y2="17.49"></line>
                                                        <line x1="15.41" y1="6.51" x2="8.59"
                                                            y2="10.49"></line>
                                                    </svg>
                                                    <span> Multi Level </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="#sidebarMultilevel2" data-toggle="collapse">
                                                                Second Level <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel2">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <a href="#sidebarMultilevel3" data-toggle="collapse">
                                                                Third Level <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel3">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#sidebarMultilevel4"
                                                                            data-toggle="collapse">
                                                                            Item 2 <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <div class="collapse"
                                                                            id="sidebarMultilevel4">
                                                                            <ul class="nav-second-level">
                                                                                <li>
                                                                                    <a href="javascript: void(0);">Item
                                                                                        1</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);">Item
                                                                                        2</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- End Sidebar -->

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 240px; height: 1540px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar"
                        style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                        style="height: 30px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm">
                                                <input type="hidden" class="form-control border flatpickr-input"
                                                    id="dash-daterange" value="2022-07-18"><input
                                                    class="form-control border form-control input" placeholder=""
                                                    tabindex="0" type="text" readonly="readonly">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-blue border-blue text-white">
                                                        <i class="mdi mdi-calendar-range"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                            <i class="mdi mdi-autorenew"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                            <i class="mdi mdi-filter-variant"></i>
                                        </a>
                                    </form>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fe-heart font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                            <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                            <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                            <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%
                                            </h3>
                                            <p class="text-muted mb-1 text-truncate">Conversion</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                            <i class="fe-eye font-22 avatar-title text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k
                                            </h3>
                                            <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="header-title mb-0">Total Revenue</h4>

                                <div class="widget-chart text-center" dir="ltr" style="position: relative;">

                                    <div id="total-revenue" class="mt-0" data-colors="#f1556c"
                                        style="min-height: 220.7px;">
                                        <div id="apexchartss1doubznk"
                                            class="apexcharts-canvas apexchartss1doubznk apexcharts-theme-light"
                                            style="width: 288px; height: 220.7px;"><svg id="SvgjsSvg1837"
                                                width="288" height="220.70000000000002"
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1839" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(47, 0)">
                                                    <defs id="SvgjsDefs1838">
                                                        <clipPath id="gridRectMasks1doubznk">
                                                            <rect id="SvgjsRect1841" width="202" height="220"
                                                                x="-3" y="-1" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMasks1doubznk">
                                                            <rect id="SvgjsRect1842" width="200" height="222"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1844" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1845">
                                                            <g id="SvgjsG1846" class="apexcharts-tracks">
                                                                <g id="SvgjsG1847"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 98 32.498170731707305 A 76.5018292682927 76.5018292682927 0 1 1 97.98664791202248 32.49817189689679"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="rgba(242,242,242,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="12.182963414634148"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 98 32.498170731707305 A 76.5018292682927 76.5018292682927 0 1 1 97.98664791202248 32.49817189689679">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1849">
                                                                <g id="SvgjsG1854"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Revenue" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1855"
                                                                        d="M 98 32.498170731707305 A 76.5018292682927 76.5018292682927 0 1 1 28.665796411598038 141.33107010534962"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(241,85,108,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="12.559756097560978"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="245" data:value="68"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 98 32.498170731707305 A 76.5018292682927 76.5018292682927 0 1 1 28.665796411598038 141.33107010534962">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1850" r="65.41034756097562"
                                                                    cx="98" cy="109"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                                <g id="SvgjsG1851"
                                                                    class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"
                                                                    style="opacity: 1;"><text id="SvgjsText1852"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="98" y="109"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="16px"
                                                                        font-weight="400" fill="#f1556c"
                                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">Revenue</text><text
                                                                        id="SvgjsText1853"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="98" y="141"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="14px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">68%</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1856" x1="0" y1="0"
                                                        x2="196" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1857" x1="0" y1="0"
                                                        x2="196" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1840" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>

                                    <h5 class="text-muted mt-0">Total sales made today</h5>
                                    <h2>$178</h2>

                                    <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are
                                        designed to work best in the meat of your page content.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                                        </div>
                                    </div>

                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 289px; height: 419px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col-->

                        <div class="col-lg-8">
                            <div class="card-box pb-2">
                                <div class="float-right d-none d-md-inline-block">
                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-xs btn-light">Today</button>
                                        <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                        <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                    </div>
                                </div>

                                <h4 class="header-title mb-3">Sales Analytics</h4>

                                <div dir="ltr" style="position: relative;">
                                    <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"
                                        style="min-height: 393px;">
                                        <div id="apexchartsqvfusakh"
                                            class="apexcharts-canvas apexchartsqvfusakh apexcharts-theme-light apexcharts-zoomable"
                                            style="width: 647px; height: 378px;"><svg id="SvgjsSvg1859"
                                                width="647" height="378" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <foreignObject x="0" y="0" width="647"
                                                    height="378">
                                                    <div class="apexcharts-legend apexcharts-align-center position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px -2px; position: absolute;">
                                                        <div class="apexcharts-legend-series" rel="1"
                                                            data:collapsed="false" style="margin: 0px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="1"
                                                                data:collapsed="false"
                                                                style="background: rgb(26, 188, 156); color: rgb(26, 188, 156); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="1"
                                                                i="0" data:default-text="Revenue"
                                                                data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            data:collapsed="false" style="margin: 0px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="2"
                                                                data:collapsed="false"
                                                                style="background: rgb(74, 129, 212); color: rgb(74, 129, 212); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="2"
                                                                i="1" data:default-text="Sales"
                                                                data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.position-bottom,
                                                        .apexcharts-legend.position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.position-right,
                                                        .apexcharts-legend.position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.position-top.apexcharts-align-left,
                                                        .apexcharts-legend.position-right,
                                                        .apexcharts-legend.position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                        }

                                                        .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                        .apexcharts-legend.position-top .apexcharts-legend-series {
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: inline-block;
                                                            cursor: pointer;
                                                            margin-right: 3px;
                                                            border-style: solid;
                                                        }

                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                            display: inline-block;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1861" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(95.6590909090909, 40)">
                                                    <defs id="SvgjsDefs1860">
                                                        <clipPath id="gridRectMaskqvfusakh">
                                                            <rect id="SvgjsRect1887" width="517.390625"
                                                                height="273.2" x="-23.966382575757578"
                                                                y="-1.5" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskqvfusakh">
                                                            <rect id="SvgjsRect1888" width="473.4578598484849"
                                                                height="274.2" x="-2" y="-2"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1893" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1894" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1895" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1896" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1900" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1901" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1902" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1903" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1907" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1908" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1909" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1910" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1914" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1915" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1916" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1917" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1921" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1922" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1923" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1924" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1928" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1929" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1930" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1931" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1935" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1936" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1937" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1938" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1942" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1943" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1944" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1945" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1949" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1950" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1951" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1952" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1956" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1957" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1958" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1959" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1963" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1964" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1965" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1966" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1970" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1971" stop-opacity="0.75"
                                                                stop-color="rgba(83,205,181,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1972" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1973" stop-opacity="0.75"
                                                                stop-color="rgba(26,188,156,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2016" x1="0"
                                                            y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop2017" stop-opacity="0.75"
                                                                stop-color="rgba(119,161,223,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2018" stop-opacity="0.75"
                                                                stop-color="rgba(74,129,212,0.75)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2019" stop-opacity="0.75"
                                                                stop-color="rgba(74,129,212,0.75)" offset="0">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1870" x1="0" y1="0"
                                                        x2="0" y2="270.2" stroke="#b6b6b6"
                                                        stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                        x="0" y="0" width="1"
                                                        height="270.2" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG2033" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2034" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText2036"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="3.5564989382460976" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="600" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2037">Jan '01</tspan>
                                                                <title>Jan '01</title>
                                                            </text><text id="SvgjsText2039"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="88.91247345615244" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2040">03 Jan</tspan>
                                                                <title>03 Jan</title>
                                                            </text><text id="SvgjsText2042"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="174.2684479740588" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2043">05 Jan</tspan>
                                                                <title>05 Jan</title>
                                                            </text><text id="SvgjsText2045"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="259.62442249196516" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2046">07 Jan</tspan>
                                                                <title>07 Jan</title>
                                                            </text><text id="SvgjsText2048"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="344.9803970098715" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2049">09 Jan</tspan>
                                                                <title>09 Jan</title>
                                                            </text><text id="SvgjsText2051"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="430.3363715277779" y="299.2"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2052">11 Jan</tspan>
                                                                <title>11 Jan</title>
                                                            </text></g>
                                                        <line id="SvgjsLine2053" x1="-20.466382575757578"
                                                            y1="271.2" x2="489.92424242424244" y2="271.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-width="1"></line>
                                                    </g>
                                                    <g id="SvgjsG2084" class="apexcharts-grid">
                                                        <g id="SvgjsG2085" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine2093" x1="-20.466382575757578"
                                                                y1="0" x2="489.92424242424244"
                                                                y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2094" x1="-20.466382575757578"
                                                                y1="67.55" x2="489.92424242424244"
                                                                y2="67.55" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2095" x1="-20.466382575757578"
                                                                y1="135.1" x2="489.92424242424244"
                                                                y2="135.1" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2096" x1="-20.466382575757578"
                                                                y1="202.64999999999998" x2="489.92424242424244"
                                                                y2="202.64999999999998" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2097" x1="-20.466382575757578"
                                                                y1="270.2" x2="489.92424242424244"
                                                                y2="270.2" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG2086" class="apexcharts-gridlines-vertical">
                                                        </g>
                                                        <line id="SvgjsLine2087" x1="3.5564989382460976"
                                                            y1="271.2" x2="3.5564989382460976" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2088" x1="88.91247345615244"
                                                            y1="271.2" x2="88.91247345615244" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2089" x1="174.2684479740588"
                                                            y1="271.2" x2="174.2684479740588" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2090" x1="259.62442249196516"
                                                            y1="271.2" x2="259.62442249196516" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2091" x1="344.9803970098715"
                                                            y1="271.2" x2="344.9803970098715" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2092" x1="430.3363715277779"
                                                            y1="271.2" x2="430.3363715277779" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2099" x1="0" y1="270.2"
                                                            x2="469.4578598484849" y2="270.2"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine2098" x1="0" y1="1"
                                                            x2="0" y2="270.2" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1890"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1891" class="apexcharts-series"
                                                            rel="1" seriesName="Revenue"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1897"
                                                                d="M -10.669496814738293 270.2L -10.669496814738293 121.58999999999997L 8.669496814738293 121.58999999999997L 8.669496814738293 121.58999999999997L 8.669496814738293 270.2L 8.669496814738293 270.2z"
                                                                fill="url(#SvgjsLinearGradient1893)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M -10.669496814738293 270.2L -10.669496814738293 121.58999999999997L 8.669496814738293 121.58999999999997L 8.669496814738293 121.58999999999997L 8.669496814738293 270.2L 8.669496814738293 270.2z"
                                                                pathFrom="M -10.669496814738293 270.2L -10.669496814738293 270.2L 8.669496814738293 270.2L 8.669496814738293 270.2L 8.669496814738293 270.2L -10.669496814738293 270.2"
                                                                cy="121.58999999999997" cx="9.669496814738293"
                                                                j="0" val="440" barHeight="148.61"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1904"
                                                                d="M 32.00849044421488 270.2L 32.00849044421488 99.63624999999999L 51.34748407369146 99.63624999999999L 51.34748407369146 99.63624999999999L 51.34748407369146 270.2L 51.34748407369146 270.2z"
                                                                fill="url(#SvgjsLinearGradient1900)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 32.00849044421488 270.2L 32.00849044421488 99.63624999999999L 51.34748407369146 99.63624999999999L 51.34748407369146 99.63624999999999L 51.34748407369146 270.2L 51.34748407369146 270.2z"
                                                                pathFrom="M 32.00849044421488 270.2L 32.00849044421488 270.2L 51.34748407369146 270.2L 51.34748407369146 270.2L 51.34748407369146 270.2L 32.00849044421488 270.2"
                                                                cy="99.63624999999999" cx="52.34748407369146"
                                                                j="1" val="505"
                                                                barHeight="170.56375" barWidth="21.338993629476587">
                                                            </path>
                                                            <path id="SvgjsPath1911"
                                                                d="M 74.68647770316805 270.2L 74.68647770316805 130.3715L 94.02547133264464 130.3715L 94.02547133264464 130.3715L 94.02547133264464 270.2L 94.02547133264464 270.2z"
                                                                fill="url(#SvgjsLinearGradient1907)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 74.68647770316805 270.2L 74.68647770316805 130.3715L 94.02547133264464 130.3715L 94.02547133264464 130.3715L 94.02547133264464 270.2L 94.02547133264464 270.2z"
                                                                pathFrom="M 74.68647770316805 270.2L 74.68647770316805 270.2L 94.02547133264464 270.2L 94.02547133264464 270.2L 94.02547133264464 270.2L 74.68647770316805 270.2"
                                                                cy="130.3715" cx="95.02547133264464"
                                                                j="2" val="414" barHeight="139.8285"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1918"
                                                                d="M 117.36446496212122 270.2L 117.36446496212122 43.56975L 136.7034585915978 43.56975L 136.7034585915978 43.56975L 136.7034585915978 270.2L 136.7034585915978 270.2z"
                                                                fill="url(#SvgjsLinearGradient1914)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 117.36446496212122 270.2L 117.36446496212122 43.56975L 136.7034585915978 43.56975L 136.7034585915978 43.56975L 136.7034585915978 270.2L 136.7034585915978 270.2z"
                                                                pathFrom="M 117.36446496212122 270.2L 117.36446496212122 270.2L 136.7034585915978 270.2L 136.7034585915978 270.2L 136.7034585915978 270.2L 117.36446496212122 270.2"
                                                                cy="43.56975" cx="137.7034585915978"
                                                                j="3" val="671"
                                                                barHeight="226.63025" barWidth="21.338993629476587">
                                                            </path>
                                                            <path id="SvgjsPath1925"
                                                                d="M 160.0424522210744 270.2L 160.0424522210744 193.53074999999998L 179.381445850551 193.53074999999998L 179.381445850551 193.53074999999998L 179.381445850551 270.2L 179.381445850551 270.2z"
                                                                fill="url(#SvgjsLinearGradient1921)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 160.0424522210744 270.2L 160.0424522210744 193.53074999999998L 179.381445850551 193.53074999999998L 179.381445850551 193.53074999999998L 179.381445850551 270.2L 179.381445850551 270.2z"
                                                                pathFrom="M 160.0424522210744 270.2L 160.0424522210744 270.2L 179.381445850551 270.2L 179.381445850551 270.2L 179.381445850551 270.2L 160.0424522210744 270.2"
                                                                cy="193.53074999999998" cx="180.381445850551"
                                                                j="4" val="227" barHeight="76.66925"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1932"
                                                                d="M 202.72043948002755 270.2L 202.72043948002755 130.70925L 222.05943310950414 130.70925L 222.05943310950414 130.70925L 222.05943310950414 270.2L 222.05943310950414 270.2z"
                                                                fill="url(#SvgjsLinearGradient1928)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 202.72043948002755 270.2L 202.72043948002755 130.70925L 222.05943310950414 130.70925L 222.05943310950414 130.70925L 222.05943310950414 270.2L 222.05943310950414 270.2z"
                                                                pathFrom="M 202.72043948002755 270.2L 202.72043948002755 270.2L 222.05943310950414 270.2L 222.05943310950414 270.2L 222.05943310950414 270.2L 202.72043948002755 270.2"
                                                                cy="130.70925" cx="223.05943310950414"
                                                                j="5" val="413"
                                                                barHeight="139.49075" barWidth="21.338993629476587">
                                                            </path>
                                                            <path id="SvgjsPath1939"
                                                                d="M 245.39842673898073 270.2L 245.39842673898073 202.31225L 264.7374203684573 202.31225L 264.7374203684573 202.31225L 264.7374203684573 270.2L 264.7374203684573 270.2z"
                                                                fill="url(#SvgjsLinearGradient1935)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 245.39842673898073 270.2L 245.39842673898073 202.31225L 264.7374203684573 202.31225L 264.7374203684573 202.31225L 264.7374203684573 270.2L 264.7374203684573 270.2z"
                                                                pathFrom="M 245.39842673898073 270.2L 245.39842673898073 270.2L 264.7374203684573 270.2L 264.7374203684573 270.2L 264.7374203684573 270.2L 245.39842673898073 270.2"
                                                                cy="202.31225" cx="265.7374203684573"
                                                                j="6" val="201" barHeight="67.88775"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1946"
                                                                d="M 288.0764139979339 270.2L 288.0764139979339 151.31199999999998L 307.4154076274105 151.31199999999998L 307.4154076274105 151.31199999999998L 307.4154076274105 270.2L 307.4154076274105 270.2z"
                                                                fill="url(#SvgjsLinearGradient1942)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 288.0764139979339 270.2L 288.0764139979339 151.31199999999998L 307.4154076274105 151.31199999999998L 307.4154076274105 151.31199999999998L 307.4154076274105 270.2L 307.4154076274105 270.2z"
                                                                pathFrom="M 288.0764139979339 270.2L 288.0764139979339 270.2L 307.4154076274105 270.2L 307.4154076274105 270.2L 307.4154076274105 270.2L 288.0764139979339 270.2"
                                                                cy="151.31199999999998" cx="308.4154076274105"
                                                                j="7" val="352" barHeight="118.888"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1953"
                                                                d="M 330.7544012568871 270.2L 330.7544012568871 16.21199999999999L 350.0933948863637 16.21199999999999L 350.0933948863637 16.21199999999999L 350.0933948863637 270.2L 350.0933948863637 270.2z"
                                                                fill="url(#SvgjsLinearGradient1949)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 330.7544012568871 270.2L 330.7544012568871 16.21199999999999L 350.0933948863637 16.21199999999999L 350.0933948863637 16.21199999999999L 350.0933948863637 270.2L 350.0933948863637 270.2z"
                                                                pathFrom="M 330.7544012568871 270.2L 330.7544012568871 270.2L 350.0933948863637 270.2L 350.0933948863637 270.2L 350.0933948863637 270.2L 330.7544012568871 270.2"
                                                                cy="16.21199999999999" cx="351.0933948863637"
                                                                j="8" val="752" barHeight="253.988"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1960"
                                                                d="M 373.4323885158403 270.2L 373.4323885158403 162.12L 392.77138214531686 162.12L 392.77138214531686 162.12L 392.77138214531686 270.2L 392.77138214531686 270.2z"
                                                                fill="url(#SvgjsLinearGradient1956)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 373.4323885158403 270.2L 373.4323885158403 162.12L 392.77138214531686 162.12L 392.77138214531686 162.12L 392.77138214531686 270.2L 392.77138214531686 270.2z"
                                                                pathFrom="M 373.4323885158403 270.2L 373.4323885158403 270.2L 392.77138214531686 270.2L 392.77138214531686 270.2L 392.77138214531686 270.2L 373.4323885158403 270.2"
                                                                cy="162.12" cx="393.77138214531686"
                                                                j="9" val="320" barHeight="108.08"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1967"
                                                                d="M 416.1103757747934 270.2L 416.1103757747934 183.39825L 435.44936940427 183.39825L 435.44936940427 183.39825L 435.44936940427 270.2L 435.44936940427 270.2z"
                                                                fill="url(#SvgjsLinearGradient1963)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 416.1103757747934 270.2L 416.1103757747934 183.39825L 435.44936940427 183.39825L 435.44936940427 183.39825L 435.44936940427 270.2L 435.44936940427 270.2z"
                                                                pathFrom="M 416.1103757747934 270.2L 416.1103757747934 270.2L 435.44936940427 270.2L 435.44936940427 270.2L 435.44936940427 270.2L 416.1103757747934 270.2"
                                                                cy="183.39825" cx="436.44936940427" j="10"
                                                                val="257" barHeight="86.80175"
                                                                barWidth="21.338993629476587"></path>
                                                            <path id="SvgjsPath1974"
                                                                d="M 458.7883630337466 270.2L 458.7883630337466 216.16L 478.12735666322317 216.16L 478.12735666322317 216.16L 478.12735666322317 270.2L 478.12735666322317 270.2z"
                                                                fill="url(#SvgjsLinearGradient1970)"
                                                                fill-opacity="1" stroke="#1abc9c"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 458.7883630337466 270.2L 458.7883630337466 216.16L 478.12735666322317 216.16L 478.12735666322317 216.16L 478.12735666322317 270.2L 478.12735666322317 270.2z"
                                                                pathFrom="M 458.7883630337466 270.2L 458.7883630337466 270.2L 478.12735666322317 270.2L 478.12735666322317 270.2L 478.12735666322317 270.2L 458.7883630337466 270.2"
                                                                cy="216.16" cx="479.12735666322317"
                                                                j="11" val="160" barHeight="54.04"
                                                                barWidth="21.338993629476587"></path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1977"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1978" class="apexcharts-series"
                                                            seriesName="Sales" data:longestSeries="true"
                                                            rel="1" data:realIndex="1">
                                                            <path id="SvgjsPath2020"
                                                                d="M 0 145.908L 42.67798725895317 43.232L 85.35597451790635 81.05999999999997L 128.0339617768595 124.292L 170.7119490358127 37.827999999999975L 213.38993629476585 151.31199999999998L 256.067923553719 178.332L 298.7459108126722 102.67599999999999L 341.4238980716254 151.31199999999998L 384.10188533057857 151.31199999999998L 426.7798725895317 205.35199999999998L 469.4578598484849 183.736"
                                                                fill="none" fill-opacity="1"
                                                                stroke="url(#SvgjsLinearGradient2016)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-line" index="1"
                                                                clip-path="url(#gridRectMaskqvfusakh)"
                                                                pathTo="M 0 145.908L 42.67798725895317 43.232L 85.35597451790635 81.05999999999997L 128.0339617768595 124.292L 170.7119490358127 37.827999999999975L 213.38993629476585 151.31199999999998L 256.067923553719 178.332L 298.7459108126722 102.67599999999999L 341.4238980716254 151.31199999999998L 384.10188533057857 151.31199999999998L 426.7798725895317 205.35199999999998L 469.4578598484849 183.736"
                                                                pathFrom="M -1 270.2L -1 270.2L 42.67798725895317 270.2L 85.35597451790635 270.2L 128.0339617768595 270.2L 170.7119490358127 270.2L 213.38993629476585 270.2L 256.067923553719 270.2L 298.7459108126722 270.2L 341.4238980716254 270.2L 384.10188533057857 270.2L 426.7798725895317 270.2L 469.4578598484849 270.2">
                                                            </path>
                                                            <g id="SvgjsG1979"
                                                                class="apexcharts-series-markers-wrap"
                                                                data:realIndex="1">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle2105" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wyg7cilmn"
                                                                        stroke="#ffffff" fill="#4a81d4"
                                                                        fill-opacity="1" stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1980" class="apexcharts-datalabels"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG1981" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2021" width="21.673828125"
                                                                        height="16" x="-10.6796875"
                                                                        y="135.9080047607422" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1983"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="0" y="147.908"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel" cx="0"
                                                                        cy="147.908"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">23</text>
                                                                    <rect id="SvgjsRect2022" width="22.673828125"
                                                                        height="16" x="30.99829864501953"
                                                                        y="33.231998443603516" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1985"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="42.67798725895317" y="45.232"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="42.67798725895317" cy="45.232"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">42</text>
                                                                </g>
                                                                <g id="SvgjsG1986" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2023" width="21.673828125"
                                                                        height="16" x="74.67628479003906"
                                                                        y="71.05999755859375" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1988"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="85.35597451790635" y="83.05999999999997"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="85.35597451790635"
                                                                        cy="83.05999999999997"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">35</text>
                                                                </g>
                                                                <g id="SvgjsG1989" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2024" width="21.673828125"
                                                                        height="15.999992370605469"
                                                                        x="117.35427856445312"
                                                                        y="114.29199981689453" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1991"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="128.0339617768595" y="126.292"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="128.0339617768595" cy="126.292"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">27</text>
                                                                </g>
                                                                <g id="SvgjsG1992" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2025" width="22.673828125"
                                                                        height="16" x="159.03225708007812"
                                                                        y="27.827999114990234" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1994"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="170.7119490358127" y="39.827999999999975"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="170.7119490358127"
                                                                        cy="39.827999999999975"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">43</text>
                                                                </g>
                                                                <g id="SvgjsG1995" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2026" width="21.673828125"
                                                                        height="16" x="202.7102508544922"
                                                                        y="141.31199645996094" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText1997"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="213.38993629476585"
                                                                        y="153.31199999999998" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="213.38993629476585"
                                                                        cy="153.31199999999998"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                                                </g>
                                                                <g id="SvgjsG1998" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2027" width="21.673828125"
                                                                        height="16" x="245.38824462890625"
                                                                        y="168.33200073242188" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2000"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="256.067923553719" y="180.332"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="256.067923553719" cy="180.332"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">17</text>
                                                                </g>
                                                                <g id="SvgjsG2001" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2028" width="21.359375"
                                                                        height="16" x="288.06622314453125"
                                                                        y="92.6760025024414" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2003"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="298.7459108126722" y="104.67599999999999"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="298.7459108126722"
                                                                        cy="104.67599999999999"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">31</text>
                                                                </g>
                                                                <g id="SvgjsG2004" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2029" width="21.673828125"
                                                                        height="16" x="330.74420166015625"
                                                                        y="141.31199645996094" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2006"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="341.4238980716254" y="153.31199999999998"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="341.4238980716254"
                                                                        cy="153.31199999999998"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                                                </g>
                                                                <g id="SvgjsG2007" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2030" width="21.673828125"
                                                                        height="16" x="373.4222106933594"
                                                                        y="141.31199645996094" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2009"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="384.10188533057857"
                                                                        y="153.31199999999998" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="384.10188533057857"
                                                                        cy="153.31199999999998"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                                                </g>
                                                                <g id="SvgjsG2010" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2031" width="21.673828125"
                                                                        height="16" x="416.1001892089844"
                                                                        y="195.3520050048828" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2012"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="426.7798725895317" y="207.35199999999998"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="426.7798725895317"
                                                                        cy="207.35199999999998"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">12</text>
                                                                </g>
                                                                <g id="SvgjsG2013" class="apexcharts-data-labels">
                                                                    <rect id="SvgjsRect2032" width="21.673828125"
                                                                        height="16" x="458.7781677246094"
                                                                        y="173.73599243164062" rx="2"
                                                                        ry="2" opacity="0.9"
                                                                        stroke="#ffffff" stroke-width="1"
                                                                        stroke-dasharray="0" fill="#4a81d4"></rect>
                                                                    <text id="SvgjsText2015"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="469.4578598484849" y="185.736"
                                                                        text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="12px"
                                                                        font-weight="600" fill="#fff"
                                                                        class="apexcharts-datalabel"
                                                                        cx="469.4578598484849" cy="185.736"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">16</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1892" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1899" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1906" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1913" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1920" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1927" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1934" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1941" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1948" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1955" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1962" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1969" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                            <g id="SvgjsG1976" class="apexcharts-data-labels"
                                                                transform="rotate(0)"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2100" x1="-20.466382575757578"
                                                        y1="0" x2="489.92424242424244" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2101" x1="-20.466382575757578"
                                                        y1="0" x2="489.92424242424244" y2="0"
                                                        stroke-dasharray="0" stroke-width="0"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2102" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2103" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2104" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect2106" width="0" height="0"
                                                        x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect2107" width="0" height="0"
                                                        x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1869" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG2054" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(41.19270833333333, 0)">
                                                    <g id="SvgjsG2055" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText2056"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="41.4" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2057">800</tspan>
                                                        </text><text id="SvgjsText2058"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="108.95" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2059">600</tspan>
                                                        </text><text id="SvgjsText2060"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="176.5" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2061">400</tspan>
                                                        </text><text id="SvgjsText2062"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="244.04999999999998"
                                                            text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2063">200</tspan>
                                                        </text><text id="SvgjsText2064"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="311.59999999999997"
                                                            text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2065">0</tspan>
                                                        </text></g>
                                                    <g id="SvgjsG2066" class="apexcharts-yaxis-title"><text
                                                            id="SvgjsText2067"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="16.925140380859375" y="175.1"
                                                            text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="900" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-title-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-90 -15.118484497070312 171.60000610351562)">Net
                                                            Revenue</text></g>
                                                </g>
                                                <g id="SvgjsG2068" class="apexcharts-yaxis" rel="1"
                                                    transform="translate(612.5833333333334, 0)">
                                                    <g id="SvgjsG2069" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText2070"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="41.5" text-anchor="start"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2071">50</tspan>
                                                        </text><text id="SvgjsText2072"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="95.53999999999999"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2073">40</tspan>
                                                        </text><text id="SvgjsText2074"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="149.57999999999998"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2075">30</tspan>
                                                        </text><text id="SvgjsText2076"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="203.61999999999998"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2077">20</tspan>
                                                        </text><text id="SvgjsText2078"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="257.65999999999997"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2079">10</tspan>
                                                        </text><text id="SvgjsText2080"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-20" y="311.7" text-anchor="start"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2081">0</tspan>
                                                        </text></g>
                                                    <g id="SvgjsG2082" class="apexcharts-yaxis-title"><text
                                                            id="SvgjsText2083"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="50.71051025390625" y="175.1" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="900" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-title-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(90 9.274093627929688 171.60000610351562)">Number
                                                            of Sales</text></g>
                                                </g>
                                                <g id="SvgjsG1862" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(26, 188, 156);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(74, 129, 212);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-1 apexcharts-yaxistooltip-right apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                            <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                                <div class="apexcharts-zoomin-icon" title="Zoom In"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="apexcharts-zoomout-icon" title="Zoom Out"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="apexcharts-zoom-icon apexcharts-selected"
                                                    title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="#000000" height="24" viewBox="0 0 24 24"
                                                        width="24">
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                        </path>
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                                    </svg></div>
                                                <div class="apexcharts-pan-icon" title="Panning"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                                                        height="24" viewBox="0 0 24 24" width="24">
                                                        <defs>
                                                            <path d="M0 0h24v24H0z" id="a"></path>
                                                        </defs>
                                                        <clipPath id="b">
                                                            <use overflow="visible" xlink:href="#a"></use>
                                                        </clipPath>
                                                        <path clip-path="url(#b)"
                                                            d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                                        </path>
                                                    </svg></div>
                                                <div class="apexcharts-reset-icon" title="Reset Zoom"><svg
                                                        fill="#000000" height="24" viewBox="0 0 24 24"
                                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg></div>
                                                <div class="apexcharts-menu-icon" title="Menu"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24">
                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z">
                                                        </path>
                                                    </svg></div>
                                                <div class="apexcharts-menu">
                                                    <div class="apexcharts-menu-item exportSVG"
                                                        title="Download SVG">Download SVG</div>
                                                    <div class="apexcharts-menu-item exportPNG"
                                                        title="Download PNG">Download PNG</div>
                                                    <div class="apexcharts-menu-item exportCSV"
                                                        title="Download CSV">Download CSV</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 648px; height: 394px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="header-title mb-3">Top 5 Users Balances</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="2">Profile</th>
                                                <th>Currency</th>
                                                <th>Balance</th>
                                                <th>Reserved in orders</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="http://127.0.0.1:8000/assets/images/users/user-2.jpg"
                                                        alt="contact-img" title="contact-img"
                                                        class="rounded-circle avatar-sm">
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Tomaslau</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                </td>

                                                <td>
                                                    0.00816117 BTC
                                                </td>

                                                <td>
                                                    0.00097036 BTC
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-plus"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                            class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="http://127.0.0.1:8000/assets/images/users/user-3.jpg"
                                                        alt="contact-img" title="contact-img"
                                                        class="rounded-circle avatar-sm">
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Erwin E. Brown</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-eth text-primary"></i> ETH
                                                </td>

                                                <td>
                                                    3.16117008 ETH
                                                </td>

                                                <td>
                                                    1.70360009 ETH
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-plus"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                            class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="http://127.0.0.1:8000/assets/images/users/user-4.jpg"
                                                        alt="contact-img" title="contact-img"
                                                        class="rounded-circle avatar-sm">
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Margeret V. Ligon</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-eur text-primary"></i> EUR
                                                </td>

                                                <td>
                                                    25.08 EUR
                                                </td>

                                                <td>
                                                    12.58 EUR
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-plus"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                            class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="http://127.0.0.1:8000/assets/images/users/user-5.jpg"
                                                        alt="contact-img" title="contact-img"
                                                        class="rounded-circle avatar-sm">
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Jose D. Delacruz</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-cny text-primary"></i> CNY
                                                </td>

                                                <td>
                                                    82.00 CNY
                                                </td>

                                                <td>
                                                    30.83 CNY
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-plus"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                            class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="http://127.0.0.1:8000/assets/images/users/user-6.jpg"
                                                        alt="contact-img" title="contact-img"
                                                        class="rounded-circle avatar-sm">
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Luke J. Sain</h5>
                                                    <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                </td>

                                                <td>
                                                    2.00816117 BTC
                                                </td>

                                                <td>
                                                    1.00097036 BTC
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-plus"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                            class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="header-title mb-3">Revenue History</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Marketplaces</th>
                                                <th>Date</th>
                                                <th>Payouts</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                                </td>

                                                <td>
                                                    Oct 15, 2018
                                                </td>

                                                <td>
                                                    $5848.68
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Freelance</h5>
                                                </td>

                                                <td>
                                                    Oct 12, 2018
                                                </td>

                                                <td>
                                                    $1247.25
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-success text-success">Paid</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Share Holding</h5>
                                                </td>

                                                <td>
                                                    Oct 10, 2018
                                                </td>

                                                <td>
                                                    $815.89
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-success text-success">Paid</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Envato's Affiliates</h5>
                                                </td>

                                                <td>
                                                    Oct 03, 2018
                                                </td>

                                                <td>
                                                    $248.75
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-danger text-danger">Overdue</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Marketing Revenue</h5>
                                                </td>

                                                <td>
                                                    Sep 21, 2018
                                                </td>

                                                <td>
                                                    $978.21
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-weight-normal">Advertise Revenue</h5>
                                                </td>

                                                <td>
                                                    Sep 15, 2018
                                                </td>

                                                <td>
                                                    $358.10
                                                </td>

                                                <td>
                                                    <span class="badge bg-soft-success text-success">Paid</span>
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->
            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2022 © UBold theme by <a href="">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/selectize/selectize.min.js') }}"></script>
    <!-- Dashboar 1 init js-->
    <script src="{{ asset('assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- </body> --}}

</html>
