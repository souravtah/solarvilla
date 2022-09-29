@extends('layouts.guest')

@section('content')
<div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-12">
                        <h3 class="display-5">👋</h3>
                        <h1 class="ls-tight font-bolder mt-6">Welcome back!</h1>
                        <p class="mt-2">Login to view your account</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" class="form-control" id="email"
                            @error('email') is-invalid @enderror" name="email"
                            placeholder="{{ __('Email') }}" required autofocus>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                @if (Route::has('password.request'))
                                <div class="mb-2">
                                    <a href="{{ route('password.request') }}" class="text-sm text-muted text-primary-hover text-underline">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                            </div>
                            <input type="password" class="form-control" id="password" @error('password') is-invalid @enderror" type="password"
                            name="password"
                            placeholder="{{ __('Password') }}" required>
                        </div>
                        {{-- <div class="mb-5">
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="check_example" id="check-remind-me">
                                <label class="form-check-label" for="check-remind-me">Keep me logged in</label>
                            </div>
                        </div> --}}
                        <div>
                            <button class="btn btn-primary w-full" type="submit">{{ __('Login') }}</button>
                        </div>
                    </form>
                    <div class="my-6"><small>Don't have an account?</small> <a href="{{ route('register') }}"
                            class="text-warning text-sm font-semibold">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
