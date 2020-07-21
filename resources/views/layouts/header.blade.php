   <header>
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mobile-srn">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{asset('frontend/assets/img/logo.png')}}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">

                  <ul id="menu-primary" class="navbar-nav" data-smartmenus-id="15926318785560557">
                    <li class="nav-item">
                      <a href="#" aria-current="page" class="nav-link active">Wedding Bands </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Wedding Singers <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Party Bands <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"> DJ’s <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Corporate Entertainment <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Live Performers </a></li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Contact</a>
                    </li>
@guest
                    <li class="dropdown btn btn-primary">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('register')}}">SignUp</a>
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                      </div>
                    </li>
                   @else
                    <li class="dropdown btn btn-primary">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name.  ' '.Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>





  <!--------------HEADER SECTION START HERE------------->
    <header>
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mobile-srn">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{asset('frontend/assets/img/logo.png')}}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">

                  <ul id="menu-primary" class="navbar-nav" data-smartmenus-id="15926318785560557">
                    <li class="nav-item">
                      <a href="#" aria-current="page" class="nav-link active">Wedding Bands </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Wedding Singers <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Party Bands <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"> DJ’s <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Corporate Entertainment <span class="sub-arrow"></span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Live Performers </a></li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Contact</a>
                    </li>
                    @guest
                    <li class="dropdown btn btn-primary">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('register')}}">SignUp</a>
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                      </div>
                    </li>
                   @else
                    <li class="dropdown btn btn-primary">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name.  ' '.Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--------------HEADER SECTION ENDS HERE-------------->