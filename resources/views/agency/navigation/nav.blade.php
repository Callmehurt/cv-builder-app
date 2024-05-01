<ul class="navbar-nav navbar-nav-icons flex-row">
    <li class="nav-item">
      <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
    </li>

    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-l ">
          <img class="rounded-circle " src="{{ asset('images/57.webp') }}" alt="" />
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
        <div class="card position-relative border-0">
          <div class="card-body p-0">
            <div class="text-center pt-4 pb-3">
              <div class="avatar avatar-xl ">
                <img class="rounded-circle " src="{{ asset('images/57.webp') }}" alt="" />
              </div>
              <h6 class="mt-2 text-body-emphasis">
                @if(auth('web')->check())
                {{ auth('web')->user()->name }}
                @else
                {{ auth('job-seeker')->user()->name }}
                @endif
              </h6>
            </div>
          </div>
          <div class="overflow-auto scrollbar" style="height: auto;">
            <ul class="nav d-flex flex-column mb-2 pb-1">
              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
              <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
            </ul>
          </div>
          <div class="card-footer p-0 border-top border-translucent">
            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
          </div>
        </div>
      </div>
    </li>
  </ul>
