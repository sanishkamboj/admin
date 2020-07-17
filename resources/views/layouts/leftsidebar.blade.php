<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
         @if(Session::get('profile') != '')
        <img src="{{ asset('uploads/userprofiles') }}/{{Session::get('profile')}}" class="avatar-sm rounded-circle mr-2" />
        <img src="{{ asset('uploads/userprofiles') }}/{{Session::get('profile')}}" class="avatar-xs rounded-circle mr-2" />
        @else
        <img src="{{ asset('assets/images/profile-image.png') }}" class="avatar-sm rounded-circle mr-2" />
        <img src="{{ asset('assets/images/profile-image.png') }}" class="avatar-xs rounded-circle mr-2" />
        @endif
        <div class="media-body">
            
            <h6 class="pro-user-name mt-0 mb-0">{{ Auth::user()->name }}</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{route('user.home')}}">
                    <i data-feather="home"></i>
                    <span class="badge badge-success float-right no-display">1</span>
                    <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('genre.list')}}">
                        <i data-feather="users"></i>
                        <span> Genres</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.artists')}}">
                        <i data-feather="users"></i>
                        <span> Artists</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.list')}}">
                        <i data-feather="users"></i>
                        <span> Users</span>
                    </a>
                </li>
                
                        
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->