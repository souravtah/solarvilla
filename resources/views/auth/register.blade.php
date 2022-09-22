@extends('layouts.guest')

@section('content')
<div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-2">
                        <h1 class="ls-tight font-bolder mt-2">Create your account</h1>
                        <p class="mt-1">It's free and easy</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-5">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Name') }}" required
                            autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('Email') }}" required
                            autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-5"><label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" @error('password') is-invalid @enderror" type="password"
                            name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-5"><label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" @error('password_confirmation') is-invalid @enderror" type="password"
                            name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check_example" id="check-remind-me" checked>
                                <label class="form-check-label font-semibold text-muted" for="check-remind-me">
                                    By creating an account, you agree to the Terms and Conditions, and our
                                    Privacy Policy
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-full">{{ __('Register') }}</button>
                        </div>
                    </form>
                    <div class="my-2">
                        <small>Already have an account?</small>
                        <a href="{{ route('login') }}" class="text-warning text-sm font-semibold">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
