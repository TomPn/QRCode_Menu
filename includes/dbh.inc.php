<head>
    <meta charset="utf8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<?php

$serverName = "sql104.epizy.com";
$dbUsename = "epiz_32546470";
$dbPassword = "iKanwByXMNruA";
$dbName = "epiz_32546470_QRCodeOrdering";

$conn = mysqli_connect($serverName, $dbUsename, $dbPassword, $dbName);
mysqli_set_charset($conn, "utf8mb4");
mysqli_query($conn, "SET character_set_client=utf8mb4")or die(mysql_error());
mysqli_query($conn, "SET character_set_connection=utf8mb4")or die(mysql_error());
mysqli_query($conn, "SET character_set_results=utf8mb4")or die(mysql_error());

if (!$conn) {
    die("Conncection failed: ". mysqli_connect_error());
}
