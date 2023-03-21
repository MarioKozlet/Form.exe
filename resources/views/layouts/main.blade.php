<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Ok</title>
    <link href="{{asset('/css/tabler.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/tabler-icons.css')}}" rel="stylesheet"/>
  </head>
  <body>
    <div class="wrapper">
      @include('layouts.navbar')
      <div class="page-wrapper">  
        <div class="d-flex flex-row justify-content-end">
          @if ($message = Session::get('EditSuccess'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <h4 class="alert-heading"> Perhatian </h4>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              {{$message}}
            </div>
          @endif
          @if ($message = Session::get('DeleteSuccess'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <h4 class="alert-heading"> Perhatian </h4>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              {{$message}}
            </div>
          @endif
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <h4 class="alert-heading"> Perhatian </h4>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              {{$message}}
            </div>
          @endif
        </div>
        <div class="page-body">
          <div class="container-xl">
            @yield('container')
          </div>
        </div>
      </div>
    </div>
  <script src="{{asset('/js/tabler.js')}}"></script>
  <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
      $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    }); 
    </script>
  </body>
</html>