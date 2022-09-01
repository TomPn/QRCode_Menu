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
        $doc = new DOMDocument();
        $doc->validateOnParse = true;
        @$doc->loadHTML(file_get_contents('cart.php'));
        $rawTableNum = $doc->getElementById('tableNum');
        $tableNum = $rawTableNum->textContent;
        
        // $tableNum = "A1";
        $sql = "SELECT dishID, dishName, quantity, price, comments FROM orderDetails WHERE tableNumber = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: cart.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "s", $tableNum);
        mysqli_stmt_execute($stmt);
        
        $results = mysqli_stmt_get_result($stmt);
        
        mysqli_stmt_close($stmt);
        echo "<form action=\" includes/cart.inc.php \" method=\"POST\">";
        if (mysqli_num_rows($results) > 0) {
            echo "<div class=\"cartWrapper\">";
            while ($row = mysqli_fetch_array($results)) {
                echo "<div class=\"orderDish\">";
                echo "<div class=\"orderDishName\">";
                echo $row[1];
                echo "</div>";
                echo "<div class=\"orderDishToppings\">";
                echo $row[4];
                echo "</div>";
                echo "<div class=\"orderDishPrice\">";
                echo $row[3];
                echo "</div>";
                echo "<input type=\"checkbox\" name=\"orderDishMinus\" class=\"orderDishMinus[]\" value=\"-\"></input>";
                echo "<div class=\"orderDishQuantity\">";
                echo $row[2];
                echo "</div>";
                echo "<input type=\"checkbox\" name=\"orderDishPlus\" class=\"orderDishPlus[]\" value=\"+\"></input>";
                echo "</div>";
            }
            echo "</div>";
        }
        echo "<button type=\"submit\" name = \"submit\" class=\"addToCart\">";
        echo "<p class=\"addToCartText\">更新购物车</p>";
        echo "<p id=\"addToCartPrice\">$20.99</p>";
        echo "</button>";
        echo "</form>";
        exit();
        ?>
    </div>
</body>

<footer>
</footer>
<script src="appForOrder.js"></script>
</html>