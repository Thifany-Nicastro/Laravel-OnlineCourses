@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first_name" class="col-sm-4 col-form-label text-sm-end">{{ __('First Name') }}</label>
                            
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        
                                <div class="invalid-feedback">
                                    @error('first_name'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-sm-4 col-form-label text-sm-end">{{ __('Last Name') }}</label>
                            
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                        
                                <div class="invalid-feedback">
                                    @error('last_name'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-4 col-form-label text-sm-end">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-sm-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                                <div class="invalid-feedback">
                                    @error('email'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-sm-4 col-form-label text-sm-end">{{ __('Password') }}</label>
                            
                            <div class="col-sm-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                        
                                <div class="invalid-feedback">
                                    @error('password'){{ $message }}@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-sm-4 col-form-label text-sm-end">{{ __('Confirm Password') }}</label>
                            
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6 offset-sm-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection