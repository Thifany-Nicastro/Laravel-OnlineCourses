@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <h2>Courses</h2> --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-2">
        @forelse ($courses as $course)
        <div class="col">
            <div class="card shadow-sm">
                <a href="{{ route('courses.show', $course) }}"><img src="https://www.cowgirlcontractcleaning.com/wp-content/uploads/sites/360/2018/05/placeholder-img-4.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $course->instructor->full_name }}</h6>
                    <p class="card-text">
                        {{ $course->description }}<br>
                        R$ {{ $course->price }}
                    </p>
                    <div class="d-flex justify-content-between">
                        
                        <form action="{{ route('cart.update', $course) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button class="btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
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
    <div class="row row-cols-5 gy-3 mt-2">
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