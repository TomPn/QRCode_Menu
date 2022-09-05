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
    include 'dbConnect.php';
    $sql = "SELECT * FROM menuProject.cartItems WHERE orderStatus = 0 OR orderStatus = 1";
    $result = mysqli_query($conn, $sql);
    $data = array();

    if ($result->num_rows > 0) {
        foreach ($result as $row) {
            $data[] = $row;
        }
    }


    ?>

    <h1 id='adminH1'>堂食订单</h1>
    <div id="admin"></div>


    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
    <script>
        var data = jQuery.parseJSON('<?php echo json_encode($data) ?>');
        if (data.length == 0) {
            $('#adminH1').html('暂无订单');
        }
    </script>
    <script src='appForAdmin.js'></script>





    <?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        if ((isset($_POST['status'])) and (isset($_POST['tableID']))) {
            $sql = $conn->prepare("UPDATE menuProject.cartItems SET orderStatus = ? WHERE tableID = ?");
            $sql->bind_param("ss", $_POST['status'], $_POST['tableID']);
            $sql->execute();
            header("refresh: 0.5");
        }
    }

    ?>







</body>
<footer>
</footer>

</html>