@extends('layouts.guest')

@section('content')
    <div class="col-md-6">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <h1>{{ __('Reset Password') }}</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                    </svg></span>
                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                               placeholder="{{ __('Email') }}">
                    </div>

                    <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                      </svg></span>
                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                               id="password" name="password"
                               placeholder="{{ __('Password') }}">
                    </div>

                    <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                      </svg></span>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password"
                               id="password_confirmation" name="password_confirmation"
                               placeholder="{{ __('Confirm Password') }}">
                    </div>

                    <button class="btn btn-block btn-success"
                            type="submit">{{ __('Reset Password') }}</button>
                </form>

            </div>
        </div>
    </div>
@endsection
