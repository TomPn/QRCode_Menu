
<?php
$server = '127.0.0.1';
$userName = 'root';
$password = '';
$dbName = 'menuProject';


$conn = mysqli_connect($server, $userName, $password, $dbName);
if ($conn->connect_error) {
    die("connection filed: " . $conn->connect_error);
}


?>
