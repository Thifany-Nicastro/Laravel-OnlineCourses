@extends('layouts.app')

@inject('cart', 'App\Services\CartService')

@section('content')
<div class="container">
    <h2>Courses</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-2">
        @forelse ($courses as $course)
        <div class="col">
            <div class="card shadow-sm h-100">
                <a href="{{ route('courses.show', $course) }}"><img src="https://www.cowgirlcontractcleaning.com/wp-content/uploads/sites/360/2018/05/placeholder-img-4.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $course->instructor->full_name }}</h6>
                    <p class="card-text">
                        {{ $course->description }}<br>
                        
                    </p>
                    <h5>${{ $course->price }}</h5>
                    <div class="flex-grow-1 d-flex justify-content-between align-items-end">
                        <form action="{{ route('cart.update', $course) }}" method="POST">
                            @csrf
                            @method('PUT')

                            @if($cart->checkItem($course))
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Already in cart!">
                                <button class="btn btn-primary" disabled><i class="fas fa-shopping-cart"></i></button>
                            </span>
                            @else
                            <button class="btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
                            @endif
                        </form>
                        <a href="#" class="btn btn-primary"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            Nothing
        @endforelse
    </div>

    <hr class="my-4">

    <h2>Categories</h2>
    <div class="row row-cols-3 row-cols-md-5 gy-3 mt-2">
        @forelse ($categories as $category)
        <div class="col">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-primary p-2" href="#" role="button">{{ $category->name }}</a>
            </div>
        </div>
        @empty
        Nothing
        @endforelse
    </div>
</div>
@endsection