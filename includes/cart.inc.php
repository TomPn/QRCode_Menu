<?php
include_once('dbh.inc.php');
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
