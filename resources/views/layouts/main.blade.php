<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> Lmao </title>
    <link href="{{asset('/css/tabler.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/tabler-icons.css')}}" rel="stylesheet"/>
  </head>
  <body>
    <div class="wrapper">
      @include('layouts.navbar')
    </div>
    <div class="page-wrapper">
      <div class="page-body">
        <div class="container-xl">
          @yield('container')
        </div>
      </div>
    </div>
  <script src="{{asset('/js/tabler.js')}}"></script>
  </body>
  </html>