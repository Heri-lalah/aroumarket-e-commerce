@extends('layouts.app')
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
                <div id="msg" class="hidden fs-6"></div>
                @if(session()->has($message))
                    {{ $message }}
                @endif
            </div>
        </div>
    </div>
    <div id="dmsg"></div>

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
    #msg {
        visibility: hidden; /* Hidden by default. Visible on click */
        min-width: 250px; /* Set a default minimum width */
        margin-left: -125px; /* Divide value of min-width by 2 */
        color: #fff; /* White text color */
        text-align: center; /* Centered text */
        border-radius: 2px; /* Rounded borders */
        padding: 10px; /* Padding */
        position: fixed; /* Sit on top of the screen */
        z-index: 1; /* Add a z-index if needed */
        left: 50%; /* Center the snackbar */
        bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #msg.error {
        visibility: visible; /* Show the snackbar */
        /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
        However, delay the fade out process for 2.5 seconds */
        background: rgb(243, 86, 86);
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        #msg.success {
        visibility: visible; /* Show the snackbar */
        /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
        However, delay the fade out process for 2.5 seconds */
        background: green;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
</style>

@endsection
@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
