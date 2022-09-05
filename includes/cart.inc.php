<?php

if(isset($_POST["dishes"])){

    $names = $_POST['dishes'];

    include('dbh.inc.php');
    include('functions.inc.php');

    createOrderEntry($conn, $names);

    echo "<script>
        alert('订单已上传，请耐心等待用餐');
        window.location.href='../A1.php?error=none';
        </script>";

} else {
    echo "<script>
        alert('出错了，请联系前台');
        window.location.href='../A1.php?error=noDish';
        </script>";
}

?>