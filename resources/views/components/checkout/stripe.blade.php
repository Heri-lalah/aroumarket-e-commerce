@extends('layouts.app')
@section('main')
    <div class="mt-1 mt-md-5">
        <div class="row justify-content-center">
            <div class="col-md-5 p-4 shadow">
                <div class="mb-3 fw-bold">Montant TTC : <span class="text-primary">{{ $amount }} €</span></div>
                <form id="checkoutForm" action="{{ route('purchase') }}" method="POST">
                    @csrf
                    <input id="card-holder-name" class="d-none" type="text">
                    <input type="text" name="paymentMethodId" id="paymentMethodId" value="" class="d-none">
                    <!-- Stripe Elements Placeholder -->
                    <div id="card-element" class="py-2"></div>
                </form>

                <button id="card-button" class="fw-bold">
                    Payer maintenant
                </button>
                <div id="payment-message" class="hidden text-danger fs-6"></div>
            </div>
        </div>
    </div>
@endsection
@section('style')
<style>
    button {
    background: #5469d4;
    color: #ffffff;
    border-radius: 4px;
    border: 0;
    padding: 10px 16px;
    cursor: pointer;
    display: block;
    margin: 2rem 0;
    transition: all 0.2s ease;
    box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
    width: 100%;
    }
</style>

@endsection
@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51LtmFqKHA3Com7kdQhSwTEQ5ZKVAKd0jh77v8zrn6er4dCI6TQcsZiddLgOycLxEB6BSBx6YZF372XfcuzJcnBIb007ZwakEbr');
    const elements = stripe.elements();
    const cardElement = elements.create('card',{
        classes : {
            base : "bg-white p-2"
        }
    });

    cardElement.mount('#card-element');

    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const checkoutForm = document.getElementById('checkoutForm');

    function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");
        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(showMessage, 6000);
    }

    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();
        const { paymentMethod, error } = await stripe.createPaymentMethod(
            'card', cardElement, {
            billing_details: {
                name: cardHolderName.value,
            }
        }
    );

    if (error) {
        showMessage(error.message);
    } else {
        document.getElementById('paymentMethodId').value = paymentMethod.id
        checkoutForm.submit();
    }

});

</script>
@endsection
