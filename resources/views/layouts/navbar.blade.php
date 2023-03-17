      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              {{-- <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> --}}
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <a href="{{ route('login') }}" class="btn btn-outline-indigo mx-2"> Login </a>
            <a href="{{ route('register') }}" class="btn btn-outline-indigo"> Register </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                    </span>
                    <span class="nav-link-title">
                      Admin
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('admin.index')}}" >
                      Admin Menu
                    </a>
                    <a class="dropdown-item" href="{{route('usermanage.index')}}" >
                      User Management
                    </a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('page-1') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                    </span>
                    <span class="nav-link-title">
                      Form
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>