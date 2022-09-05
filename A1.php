<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>A1's Menu</title>
    <div class="header__navbar">
        <a class="menu" href="#">logo</a>
        <a class='language' href="#">Eng/中文</a>
        <a id="tableNum">A1</a>
        <a class='shoppingCartIcon' href="cart.php" target=”_blank”><i class="fa fa-shopping-cart"></i></a>
    </div>
</head>

<body>
    <!-- Top Navigation Menu -->
    <nav class="dish__navbar">
        <ul class="navbar__menu">
            <li class="navbar__item"> 
                <a href="#DishA" class="navbar__links" id="PotatoNoodle"> 土豆粉系列 </a> 
            </li>
            <li class="navbar__item"> 
                <a href="#DishB" class="navbar__links" id="Noodle"> 面食系列 </a> </li>
            <li class="navbar__item"> 
                <a href="#DishC" class="navbar__links" id="RiceNoodle"> 陕西风味 </a> </li>
            </li>
            <li class="navbar__item"> 
                <a href="#DishD" class="navbar__links" id="ShanXiStyle"> 饮品 </a> 
            </li>
            <li class="navbar__item"> 
                <a href="#DishE" class="navbar__links" id="SmallDIsh"> 秘制小菜 </a> 
            </li>
            <li class="navbar__item"> 
                <a href="#DishF" class="navbar__links" id="Drink"> 养生渔粉系列 </a> 
            </li>
            <li class="navbar__item"> 
                <a href="#DishG" class="navbar__links" id="NewProduct"> 新品 </a> 
            </li>
        </ul>
    </nav> 
    
    <!-- Menu Section -->
    <div id="Menu">
        <div class="dish dishA" id="DishA">
            <h3>土豆粉系列</h3>
            <div class="dish dishA1">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A1 香辣土豆粉</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishA2">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A2 三鲜土豆粉</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishA3">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A3 排骨土豆粉</p>
                    <p class="dishPrice">$13.59</p>
                </div>
            </div>
            <div class="dish dishA4">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A4 牛腩土豆粉</p>
                    <p class="dishPrice">$14.59</p>
                </div>
            </div>
            <div class="dish dishA5">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A5 鸭丝土豆粉</p>
                    <p class="dishPrice">$14.59</p>
                </div>
            </div>
            <div class="dish dishA6">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A6 肥肠土豆粉</p>
                    <p class="dishPrice">$14.59</p>
                </div>
            </div>
            <div class="dish dishA7">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A7 小炖肉土豆粉</p>
                    <p class="dishPrice">$13.59</p>
                </div>
            </div>
            <div class="dish dishA8">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A8 鸡丝土豆粉</p>
                    <p class="dishPrice">$13.59</p>
                </div>
            </div>
            <div class="dish dishA9">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">A9 香辣鸡块土豆粉</p>
                    <p class="dishPrice">$13.59</p>
                </div>
            </div>
        </div>
        <div class="Dish dishB" id="DishB">
            <h3>面食系列</h3>
            <div class="dish dishB1">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">B1 羊肉面</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishB2">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">B2 红烧排骨面</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
        </div>
        <div class="Dish dishC" id="DishC">
            <h3>陕西风味</h3>
            <div class="dish dishC1">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">C1 羊肉泡沫</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishC2">
                <div><img src="A1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">C2 水盆羊肉泡饼</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
        </div>
        <div class="Dish dishD" id="DishD">
            <h3>饮品系列</h3>
            <div class="dish dishD1">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">D1 可乐</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishD2">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">D2 雪碧</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
        </div>
        <div class="Dish dishE" id="DishE">
            <h3>秘制小菜</h3>
            <div class="dish dishE1">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">E1 拌三丝</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishE2">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">E2 香辣豆泡（辣）</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
        </div>
        <div class="Dish dishF" id="DishF">
            <h3>养生渔粉系列</h3>
            <div class="dish dishF1">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">F1 招牌蛋白养生渔粉</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishF2">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">F2 排骨养生渔粉</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
        </div>
        <div class="Dish dishG" id="DishF">
            <h3>新品</h3>
            <div class="dish dishG1">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">G1 麻辣拌</p>
                    <p class="dishPrice">$10.99</p>
                </div>
            </div>
            <div class="dish dishG2">
                <div><img src="B1.jpg" class="dishImg"></div>
                <div class="dishText">
                    <p class="dishName">G2 提拉米苏</p>
                    <p class="dishPrice">$7.99</p>
                </div>
            </div>
        </div>
        <div class="bottom"></div>
    </div>

    <button onclick="location.href = 'cart.php';" name="submitOrder" id="submitOrder" class="addToCart">
        <!-- <div class="viewCartBtn"></div> <i class="viewCartIcon fa fa-basket-shopping fa-xl"></i> -->
        <p class="addToCartText">购物车</p>
        <p id="addToCartPrice">$0</p>
    </button>
    <div class="bottom"></div>
</body>
<footer>
</footer>
<script type="text/javascript" src="app.js"></script>
</html>