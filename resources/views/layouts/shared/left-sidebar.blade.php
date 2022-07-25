<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
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

                {{-- <li class="menu-title">Navigation</li> --}}
                
                <li>
                    <a href="#sidebarProductManagement" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Product Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProductManagement">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.category.index') }}">Category</a>
                            </li>
                        
                        </ul>
                    </div>
                {{-- </li> --}}
                <li>
                    <a href="#sidebarVendorManagement" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Vendor Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarVendorManagement">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarUserManagement" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> User Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarUserManagement">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarSales" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Sales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSales">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Orders</a>
                                <a href="#">Reports</a>
                                <a href="#">Invoices</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarWholesale" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Wholesale Orders </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarWholesale">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarPayment" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Payment Methods </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPayment">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarShippings" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Shippings Methods </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarShippings">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarAdvertisements" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Advertisements </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdvertisements">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
             
                <li>
                    <a href="#sidebarTickets" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Tickets </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarLocalisation" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Localisation </span>
                    </a>
                    <div class="collapse" id="sidebarLocalisation">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">test</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarPages" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Pages </span>
                    </a>
                    <div class="collapse" id="sidebarPages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Pages</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarLanguages" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Languages </span>
                    </a>
                    <div class="collapse" id="sidebarLanguages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Languages</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarSettings" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                         {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Settings </span>
                    </a>
                    <div class="collapse" id="sidebarSettings">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Settings</a>
                            
                            </li>
                        
                        </ul>
                    </div>
                </li>
              

           
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->