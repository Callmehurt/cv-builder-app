<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages-->

            @if(auth('web')->check())
            <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->routeIs('agency.dashboard') ? 'active' :  '' }}" href="{{ route('agency.dashboard') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span></div>
              </a>
            </div>
            @else
              <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->routeIs('seeker.dashboard') ? 'active' :  '' }}" href="{{ route('seeker.dashboard') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span></div>
              </a>
            </div>
            @endif

            {{-- Job Seeker navigations --}}
            @if(auth('job-seeker')->check())
            <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->routeIs('seeker.myCvPage') ? 'active' :  '' }}" href="{{ route('seeker.myCvPage') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">My CV</span></span></div>
              </a>
            </div>
            @endif
          </li>
        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
  </nav>