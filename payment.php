<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>
    <link rel="stylesheet" href="stylepay.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Enroll Course</h1>
        </div>
        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/pro2.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Full stack WEB Development</h3>
                                <span>MERN Stack</span>
                                <div class="buttons">
                                    <!-- <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button> -->
                                </div>
                                <!-- <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a> -->
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$300</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Web Dev : </label>
                                <span>$300</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$300</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://www.paypal.com/sdk/js?client-id=AXl93mltnz_B6yFlMiKqkG8_xn6lFvmnqXXDDj-hxI0UazwWKPTEP6XvlCGvIhwiRwqEsWAQfUrurwNH"></script>
    <script>paypal.Buttons().render('paypal-payment-button');</script>
    <script src="payindex.js"></script>
</body>
</html>