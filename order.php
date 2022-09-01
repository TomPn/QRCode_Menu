<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.6.1.min (1).js"></script>
    <title>Order Page</title>
    <div class="header__navbar">
        <a class="menu" href="#">logo</a>
        <a class='language' href="#">Eng/中文</a>
        <a class="tableNum">A1</a>
        <a class='shoppingCartIcon' href="#"><i class="fa fa-shopping-cart"></i></a>
    </div>
</head>

<body>

    <h2 id="dishToOrder">A1 香辣土豆粉</h2>
    <div class="allToppings">
        <div class="addMeat">
            <h3 class="toppingsTitle">加肉</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">牛肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">羊肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="addVege">
            <h3 class="toppingsTitle">加菜</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">青菜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">海带</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="addCarb">
            <h3 class="toppingsTitle">加面</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">面</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">米线</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="addEgg">
            <h3 class="toppingsTitle">加蛋</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">煎蛋</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">卤蛋</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox"> <label> <input type="checkbox"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
    </div>

    <div class="addToCart">
        <p class="addToCartText">加入购物车</p>
        <p class="addToCartPrice">$20.99</p>
    </div>

    <script src="appForOrder.js"></script>

    <?php echo $_POST['price']; ?>

    <div class="bottom"></div>
    <div class="bottom"></div>
</body>
<footer>

</footer>


</html>