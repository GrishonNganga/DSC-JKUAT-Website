<nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
  <div class="container">
      <a class="navbar-brand" href="/">
          <img data-src="{{secure_asset('img/dsc-logo.png')}}" height="35" alt="DSC icon">
          <span class="text-white" font-weight="bold"> DSC JKUAT </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-icon__circle">
          </span>
          <span class="menu-icon">
              <span class="menu-icon__bar"></span>
              <span class="menu-icon__bar"></span>
              <span class="menu-icon__bar"></span>
          </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#overview">Overview
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item"><a href="#technologies" class="nav-link">Technologies</a></li>
          <li class="nav-item"><a class="nav-link" href="{{secure_asset('projects')}}">Projects</a></li>
              <li class="nav-item"><a class="nav-link" href="{{secure_asset('resources')}}">Resources</a></li>
              <li class="nav-item"><a href="#workshops" class="nav-link">Workshops</a></li>
              <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
              <li class="nav-item">
                  <a class="nav-link" href="{{secure_asset('/participate')}}">Participate</a>
              </li>
              @if(Auth::check())

                  <li class="nav-item ml-auto dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ explode(' ', trim(auth::user()->name))[0] }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
              
                          @if(Auth::check() && Auth::user()->id == 1)
                              <a class="dropdown-item" href="/admin">
                              Dashboard
                              </a>
                          @endif
              
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endif
          </ul>
          <div class="custom-menu__right">
              <a href="/events" class="event-btn" rel="noreferrer" >All
                  Events</a>
          </div>
      </div>
  </div>
</nav>