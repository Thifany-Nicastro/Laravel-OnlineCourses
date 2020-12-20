@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Checkout</h3>

                    <form method="POST" action="{{ route('payments.purchase') }}" id="checkout-form">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <x-forms.vertical-input field="card_holder_name" label="Card holder name" :value="old('nome')" />
                            </div>

                            <div class="col-sm-6">
                                <label for="card-element" class="form-label">card-element</label>
                                <div id="card-element"></div>
                            </div>

                            <input type="hidden" name="payment_method_id" id="payment-method-id" class="payment-method">
                        </div>
                    </form>

                    <div class="alert alert-danger d-none" role="alert" id="payment-errors"></div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Summary</h3>

                    <p>Original price: <span class="float-end">${{ $totalValue }}</span></p>
                    <hr>
                    <h5>Total: <span class="float-end">${{ $totalValue }}</span></h5>
                    <p>By completing your purchase you agree to these Terms of Service.</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary p-3" id="card-button">
                            Complete Payment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Order Details</h3>

                    @foreach ($items as $item)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>{{ $item->name }}</h6>
                            {{ $item->instructor->full_name }}
                            <span class="float-end">R$ {{ $item->price }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');


    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');

    cardButton.addEventListener('click', async (e) => {
        const { paymentMethod, error } = await stripe.createPaymentMethod(
            'card', cardElement, {
                billing_details: { name: cardHolderName.value }
            }
        );

        if (error) {
            // Display "error.message" to the user...
            $('#payment-errors').text(error.message)
            $('#payment-errors').removeClass('d-none')
        } else {
            // The card has been verified successfully...
            // alert(paymentMethod.id)
            $('#payment-method-id').val(paymentMethod.id)
            $('#checkout-form').submit()
        }
    });
</script>
@endsection