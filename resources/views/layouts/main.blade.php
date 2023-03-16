<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> Lmao </title>
    <link href="{{asset('/css/tabler.css')}}" rel="stylesheet"/>
  </head>
  <body >
    <div class="wrapper">
      <div class="sticky-top">
        <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
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
              <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                  <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                    Masuk
                  </a>
                  <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                    Daftar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
        <div class="page-body">
          <div class="container-xl">
            @yield('container')
          </div>
        </div>
    <script src="{{asset('/js/tabler.min.js')}}"></script>>
  </body>
</html>