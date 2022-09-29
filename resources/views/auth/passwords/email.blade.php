@extends('layouts.guest')

@section('content')
<div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-2">
                        <h3 class="display-5">🔐</h3>
                        <h1 class="ls-tight font-bolder mt-2">Password Reset</h1>
                        <p class="mt-2">Enter your email, we will send you a reset link</p>
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
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        @if(session('status'))
                        <div role="alert" class="alert alert-success py-2 ">
                            <ul class="py-0 m-0">
                                <li>{{ session('status') }}</li>
                            </ul>
                        </div>
                        @endif
                        <div class="mb-5">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" class="form-control" id="email" @error('email') is-invalid @enderror" type="email"
                            id="email" name="email" placeholder="{{ __('Type your registered email') }}">
                        </div>
                        <button class="btn btn-primary w-full" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </form>
                    <div class="my-2">
                        <small>Want to try to login again?</small>
                        <a href="{{ route('login') }}" class="text-warning text-sm font-semibold">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
