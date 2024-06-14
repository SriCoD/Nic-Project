@extends('Auth.master_auth')
@section('title', 'Login')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header h4 text-center">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('userLogin') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mx-1 mb-2">
                            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address :') }}</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row mx-1 mb-2">
                            <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password :') }}</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                            placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row mx-1 mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Don\'t have an account?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection