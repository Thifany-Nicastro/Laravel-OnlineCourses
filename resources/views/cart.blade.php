@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                        <div class="card-body">
                            <h6>{{ $item->name }}</h6>
                            {{ $item->instructor->full_name }}
                            <span class="float-end">R$ {{ $item->price }}</span>
                        </div>
                    </div>
                    @empty
                    <div class="text-center p-5">
                       <h4><i class="fas fa-shopping-cart fa-4x"></i><br>Your cart is empty</h4>
                    </div>
                    @endforelse
                    
                    {{-- <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Curso</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a type="button" href="{{ route('card.edit', $item) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('cart.destroy', $item) }}" method="POST" class="form-destroy">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Nothing</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    Total:
                    <h3>R$ 432.90</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection