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
        <img class="logo" src="logo.png">
        <a id="tableID">桌号</a>
        <a class='shoppingCartIcon' href="cart.php" target=”_blank”><i class="fa fa-shopping-cart fa-lg"></i></a>
    </div>
</head>

<body>
    <div class="dishToOrder" id="dishToOrderName"> </div>
    <div class="allToppings">
        <div class="addMeat">
            <h3 class="toppingsTitle">加肉</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">牛肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+牛肉"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">羊肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+羊肉"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鸭丝</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鸭丝"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">排骨</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+排骨"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">肥肠</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+肥肠"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">肉燥</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+肉燥"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">大虾</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+大虾"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">小炖肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+小炖肉"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鸡丝</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鸡丝"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鸡块</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鸡块"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">牛丸</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+牛丸"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鱼丸</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鱼丸"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">羊杂</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+羊杂"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">青口</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+青口"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鱼肉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鱼肉"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">（改）肉夹馍</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+（改）肉夹馍"> <span class="checkmark"></span> </label>
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
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+青菜"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">海带</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+海带"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">豆干</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+豆干"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">青瓜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+青瓜"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">糖蒜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+糖蒜"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">皇子菇</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+皇子菇"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">豆芽</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+木耳丝"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">黄花菜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+黄花菜"> <span class="checkmark"></span> </label>
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
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+面"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">土豆粉</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+土豆粉"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">米线</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+米线"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">粉丝</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+粉丝"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">多泡馍</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+多泡馍"> <span class="checkmark"></span> </label>
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
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+煎蛋"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">卤蛋</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+卤蛋"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="addSoup">
            <h3 class="toppingsTitle">加汤</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">高汤</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+高汤"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">（改）浓骨汤</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+（改）浓骨汤"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="addSeasoning">
            <h3 class="toppingsTitle">加调料</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">盐</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+盐"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">辣椒</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+辣椒"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">香菜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+香菜"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">蒜</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+蒜"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">葱</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+葱"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">芝麻</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+芝麻"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">黄豆</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+黄豆"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">鸡精</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+鸡精"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">味精</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+味精"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">胡椒</p>
                    <p class="toppingPrice">$5.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+胡椒"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
        </div>
        <div class="changeMeat">
            <h3 class="toppingsTitle">肥瘦(默认半肥瘦)</h3>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">纯瘦</p>
                    <p class="toppingPrice">$0.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+纯瘦"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>
            <div class="topping">
                <div class="toppingText">
                    <p class="toppingName">纯肥</p>
                    <p class="toppingPrice">$0.00</p>
                </div>
                <div class="toppingCheckbox">
                    <label> <input type="checkbox" name="toppings[]" value="+纯肥"> <span class="checkmark"></span> </label>
                </div>
                <div class="toppingLine"></div>
            </div>

        </div>
        <div class="addNotes">
            <h3 class="toppingsTitle">备注</h3>
            <div class="topping">
                <input type=' text' id='additionalNotes'><br>
            </div>
            <div class="bottom"></div>
        </div>
    </div>
    <button class="addToCart" onclick="location.href = 'A1.php'">
        <p class=" addToCartText">加入购物车</p>
        <p id="addToCartPrice">$20.99</p>
    </button>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="appForOrder.js"></script>
</body>
<footer>
</footer>

</form>


</html>