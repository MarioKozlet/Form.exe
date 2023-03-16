@extends('layouts.bootstrap')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 mt-5">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <main class="form-signin w-100 mt-5">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <div class="form-floating">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror
                            id="email" placeholder="email" autofocus required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror
                            id="password" placeholder="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                </form>
                <small class="d-blcok text-center">Not Registerd? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
