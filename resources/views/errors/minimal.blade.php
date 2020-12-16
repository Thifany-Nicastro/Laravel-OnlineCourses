@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center bg-light p-5 rounded-3">
        <h1 class="display-3"> <i class="fas fa-exclamation-triangle"></i> @yield('code') </h1>
        <h1 class="display-4"> @yield('message') </h1>
        <hr class="my-4">
        <p>@yield('explanation')</p>
        <a class="btn btn-primary mt-3" href="{{ route('inicio') }}" role="button">Voltar</a>
    </div>
</div>
@endsection