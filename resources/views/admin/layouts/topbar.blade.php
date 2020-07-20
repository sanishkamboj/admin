 <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="{{route('user.home')}}" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="40" />
                        </span>
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        <!--li class="dropdown d-none d-sm-block show-dropdown">
                            <div class="app-search">
                                <form action="#" method="get">
                                    <div class="input-group">

                                        <input type="text" name="q" id="top-search-bar" autocomplete="false" data-page="topbar" value="" class="form-control search-input"
                                                placeholder="Search..." />
                                        <span data-feather="search"></span>
                                    </div>
                                    
                                </form

                            </div>
                            <div class="dropdown-menu dropdown-menu-right show-dropdown search-dropdown" id="suggetion-result">
                                
                            </div>
                        </li-->

                        <!--li class="dropdown d-none d-lg-block" data-toggle="tooltip" data-placement="left" title="Change language">
                            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="globe"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="mr-2" height="12"> <span
                                        class="align-middle">German</span>
                                </a>

                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="mr-2" height="12"> <span
                                        class="align-middle">Italian</span>
                                </a>

                                
                            </div>
                        </li-->



                        <li class="notification-list" data-placement="left" title="Logout">
                            <a href="{{route('logout')}}"  class="nav-link">
                                <i data-feather="log-out"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list align-self-center profile-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <div class="media user-profile ">
                                    <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="user-image" class="rounded-circle align-self-center" />
                                    <div class="media-body text-left">
                                        <h6 class="pro-user-name ml-2 my-0">
                                            <span>Shreyu N</span>
                                            <span class="pro-user-desc text-muted d-block mt-1">Administrator </span>
                                        </h6>
                                    </div>
                                    <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                                <a href="pages-profile.html" class="dropdown-item notify-item">
                                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                    <span>My Account</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                    <span>Settings</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                    <span>Support</span>
                                </a>

                                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- end Topbar -->