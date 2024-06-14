@extends('Auth.master_auth')
@section('title', 'Register')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow mt-5 mx-5">
                <div class="card-header h4 text-center">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('userRegister') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mx-1 mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Enter your name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password :') }}</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                            placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row mx-1 mb-2">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-right">{{ __('Confirm Password :') }}</label>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Enter your password">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            </div>
                        </div>
                        <div class="form-group row mb-0 text-center">
                            <a href="{{ route('login') }}">{{ __('Already have an account?') }}</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection