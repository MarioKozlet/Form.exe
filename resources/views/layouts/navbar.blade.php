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
            @auth
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-white p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <div class="d-xl-block ps-2">
                  <div>{{ auth()->user()->username }}</div>
                  <div class="mt-1 small text-white"> {{ auth()->user()->role }} </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalLogout">
                  Logout
                </button>
              </div>
            </div>
            @else
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-white p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <div class="d-xl-block ps-2">
                  <div>Guest</div>
                  <div class="mt-1 small text-white"> Guest </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="{{ route('login') }}" class="dropdown-item"> Login </a>
              </div>
            </div>
            @endauth
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              @auth
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('pageForm') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                    </span>
                    <span class="nav-link-title">
                      Form
                    </span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                      </span>
                      <span class="nav-link-title">
                        Admin
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('admin.index') }}" >
                        Admin Menu
                      </a>
                      <a class="dropdown-item" href="{{ route('usermanage.index') }}" >
                        User Management
                      </a>
                    </div>
                </li>
              </ul>
              @endauth
            </div>
          </div>
        </div>
    </header>
    
    <!-- Modal -->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Peringatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                Apakah Anda Ingin Logout?
              </div>
            </div>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak, Terima Kasih</button>
                <button type="submit" class="btn btn-danger">Ya</button>
              </div>
            </form>
        </div>
      </div>
    </div>