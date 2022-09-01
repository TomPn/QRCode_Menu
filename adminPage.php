<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <?php
        include_once('includes/dbh.inc.php');
        $sql = "SELECT tableNumber, dishID, dishName, quantity, price, comments FROM orderDetails;";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5];
                echo "<br>";
            }
        }
        exit();
    ?>
</body>
<footer>

</footer>
</html>