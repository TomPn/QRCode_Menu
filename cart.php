<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order Page</title>
    <div class="header__navbar">
        <a class="menu" href="#">logo</a>
        <a class='language' href="#">Eng/中文</a>
        <a id="tableNum">A1</a>
        <a class='shoppingCartIcon' href="#"><i class="fa fa-shopping-cart"></i></a>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>

</head>

<body>
    <div id="cart">
    </div>
    <button type = "post" name="submitOrder" id="submitOrder" class="addToCart">
        <p class="addToCartText">下单</p>
        <p id="addToCartPrice">$0</p>
    </button>
    <script src="appForCart.js"></script>
</body>

<footer>
</footer>

</html>