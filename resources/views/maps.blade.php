

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <!--font awesome bootstrap CDN-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/productHover.css')}}">


</head>

<body>
    <div class="scene scene--card">
        <div class="card">
            <div class="card__face card__face--front">
                <img class="mx-auto mt-5 d-block inventory" src="{{ asset('images/inventory.png') }}" />
                <h2>Inventory Management System</h2>
            </div>
            <div class="card__face card__face--back">
                <p>Inventory management includes aspects such as controlling and overseeing purchases — from
                    suppliers as well as customers — maintaining the storage of stock, controlling the amount of
                    product for sale, and order fulfilment.</p>
            </div>
        </div>
    </div>
    <p>Click card to flip.</p>
<script>
    var card = document.querySelector('.card');
    card.addEventListener( 'mouseover', function() {
        card.classList.toggle('is-flipped');
    });
</script>
</body>

</html>
