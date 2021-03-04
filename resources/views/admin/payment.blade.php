<button id="checkout-button" data-secret="{{$session->id}}  ">
    Checkout
</button>


<script>
    var stripe = Stripe('pk_test_51H4LzxLRh1ikRvHv72d6YU7tPLUU1Xah4ryiaAUQ4UxQ2jWgcaL6Yq5MAJqNWcXMmKAjjDQBSkwxH3Grfn6mGrPY00zYSDv0XI');

    var checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function() {
        stripe.redirectToCheckout({
            // Make the id field from the Checkout Session creation API response
            // available to this file, so you can provide it as argument here
            // instead of the  placeholder.
            sessionId: '{{$session->id}}'
        }).then(function (result) {
            // If `redirectToCheckout` fails due to a browser or network
            // error, display the localized error message to your customer
            // using `result.error.message`.
        });
    });
</script>