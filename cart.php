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
</head>

<body>
    <div id="cart">
        <?php
        include_once('includes/dbh.inc.php');
        include_once('includes/cart.inc.php');
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                echo "<div class=\"orderDishName\">";
                echo $row[1];
                echo "</div>";
                echo "<div class=\"orderDishToppings\">";
                echo $row[4];
                echo "</div>";
                echo "<div class=\"orderDishPrice\">";
                echo $row[3];
                echo "</div>";
                echo "<button class=\"orderDishMinus\"> - </button>";
                echo "<div class=\"orderDishQuantity\">";
                echo $row[2];
                echo "</div>";
                echo "<button class=\"orderDishPlus\"> + </button>";
                echo "</div>";
            }
        }
        exit();
        ?>
    </div>
</body>

<footer>
    <div class="order">

    </div>
    
</footer>
<script src="appForOrder.js"></script>
</html>