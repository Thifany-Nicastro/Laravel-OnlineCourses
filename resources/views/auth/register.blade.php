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
                            <x-forms.horizontal-input field="first_name" label="{{ __('First Name') }}" :value="old('first_name')"/>
                        </div>

                        <div class="row mb-3">
                            <x-forms.horizontal-input field="last_name" label="{{ __('Last Name') }}" :value="old('last_name')"/>
                        </div>

                        <div class="row mb-3">
                            <x-forms.horizontal-input type="email" field="email" label="{{ __('E-Mail Address') }}" :value="old('email')"/>
                        </div>

                        <div class="row mb-3">
                            <x-forms.horizontal-input type="password" field="password" label="{{ __('Password') }}" :value="old('password')"/>
                        </div>

                        <div class="row mb-3">
                            <x-forms.horizontal-input type="password" field="password_confirmation" label="{{ __('Confirm Password') }}" :value="old('password_confirmation')"/>
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