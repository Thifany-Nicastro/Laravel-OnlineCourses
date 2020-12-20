@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if($items)
                        <div class="clearfix mb-3">
                            <a href="{{ route('cart.clean') }}" class="btn btn-outline-primary float-end">Clean <i class="fas fa-trash"></i></a>
                        </div>
                    @endif

                    @forelse ($items as $item)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2 text-center">
                                <img src="https://www.cowgirlcontractcleaning.com/wp-content/uploads/sites/360/2018/05/placeholder-img-4.jpg" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }} <span class="float-end">R$ {{ $item->price }}</span></h5>
                                    {{ $item->instructor->full_name }}
                                    <form action="{{ route('cart.destroy', $item) }}" method="POST" class="form-destroy float-end">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center p-5">
                       <h4><i class="fas fa-shopping-cart fa-4x mb-3"></i><br>Your cart is empty</h4>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    Total:
                    <h3>${{ $totalValue }}</h3>
                    <div class="d-grid gap-2">
                        <a class="btn btn-primary p-3" href="{{ route('payments.checkout') }}" role="button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection