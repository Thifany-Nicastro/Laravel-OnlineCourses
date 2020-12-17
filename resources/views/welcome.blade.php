@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Courses</h2>
    <div class="row row-cols-4">
        @forelse ($courses as $course)
        <div class="col my-3">
            <div class="card" style="width: 18rem;">
                <img src="https://www.cowgirlcontractcleaning.com/wp-content/uploads/sites/360/2018/05/placeholder-img-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $course->instructor }}</h6>
                    <p class="card-text">{{ $course->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @empty
            Nothing
        @endforelse
    </div>

    <hr class="my-4">

    <h2>Categories</h2>
    <div class="row row-cols-5">
        @forelse ($categories as $category)
        <div class="col my-2">
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