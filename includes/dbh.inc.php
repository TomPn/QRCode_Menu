<?php

$serverName = "127.0.0.1";
$dbUsename = "root";
$dbPassword = "";
$dbName = "menuProject";

$conn = mysqli_connect($serverName, $dbUsename, $dbPassword, $dbName);

if (!$conn) {
    die("Conncection failed: ". mysqli_connect_error());
}
