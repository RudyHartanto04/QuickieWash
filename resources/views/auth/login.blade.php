@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder text-orange">Sign In</h4>
                                    <p class="mb-0 text-orange">Enter your Email and Password to Sign In</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? '' }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button dusk="submit" type="submit" class="btn btn-lg w-100 mt-4 mb-0" style="background-color: #f56d37; border-color: #f56d37; color: white;">
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="{{ route('register') }}" class="text-info text-info font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative" 
                                 style="background-color: #f56d37; height: 100%; margin: 3rem; padding: 0 1.75rem; border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; overflow: hidden;">
                                <span class="mask" style="background-color:#f56d37;"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">QuickieWash</h4>
                                     <p class="text-white font-weight-bolder position-relative">Laundry Cepat & Gampang</p>
                                <div class="position-relative" 
                                     style="background-image: url('{{ asset('img/QuicKie.png') }}'); background-size: cover; background-position: center; height: 50%; border-radius: 1rem;">
                                </div>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative"></h4>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
@endsection

