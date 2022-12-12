@extends('layouts.app')
@section('header')
    @vite('resources/css/redirectMessage.css')
@endsection
@section('main')
    <div class="mt-1 mt-md-5">
        <div class="row justify-content-center">
            <div class="col-md-5 p-4 shadow">
                @if($amount>0)
                <div class="mb-3 fw-bold">Montant TTC : <span class="text-primary">{{ $amount }} €</span></div>
                @endif
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
                <div id="msg" class="hidden fs-6">

                    @if (Session::has('error'))
                        <div id="redirectmsg" class="error bg-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div id="redirectmsg" class="success bg-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    setTimeout(function(){
        document.getElementById('redirectmsg').style.visibility = "hidden";
        document.getElementById('redirectmsg').style.animation = "fadeout 1s 1s";
    }, 6000);
</script>
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

    function toast(text, background) {
        // Get the snackbar DIV
        var x = document.getElementById("msg");
        x.innerHTML = text;
        // Add the "show" class to DIV
        x.className = background;

        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){
            x.className = x.className.replace(background, "");
            x.innerHTML = "";
        }, 3000);
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
        //document.getElementById('msg').innerHTML = error.message;
        toast(error.message, "error");
    } else {
        document.getElementById('paymentMethodId').value = paymentMethod.id
        checkoutForm.submit();
    }

});

</script>
@endsection
