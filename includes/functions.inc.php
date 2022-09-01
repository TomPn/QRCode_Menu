<?php

function emptyInputSignup($username,$phone,$pwd,$pwdRepeat) {
    $result;
    if (empty($username) || empty($phone) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}


function invalidPhone($phone) {
    $result;
    if (!preg_match("/^[0-9]{10}+$/", $phone)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd != $pwdRepeat) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $phone) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersPhone = ?;";
    $stmt = mysqli_stmt_init($conn); //create a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $phone);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $phone, $password, $identity) {
    $sql = "INSERT INTO users (usersName,usersPhone,usersPassword,usersIdentity) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); //create a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hasedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $phone, $hasedPwd, $identity);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username,$pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $nameExist = usernameExists($conn, $username, $username);

    if ($nameExist === false) {
        header('location: ../login.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $nameExist['usersPassword'];
    $checkPassword = password_verify($pwd, $pwdHashed);
    if ($checkPassword === false) {
        header('location: ../login.php?error=wronglogin');
        exit();
    } 
    else if ($checkPassword === true) {
        session_start();
        $_SESSION['userid'] = $nameExist['usersId'];
        $_SESSION['username'] = $nameExist['usersName'];
        if ($nameExist['usersIdentity'] === 'admin') {
            header("location: ../adminPage.php");
            exit();
        }
        header("location: ../guestPage.php");
        exit();
    }
}

function createEntry($conn, $dishID, $tableNum, $dishName, $quantity, $price, $comments) {
    $sql = "INSERT INTO orderDetails (tableNumber,dishID,dishName,quantity,price,comments) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); //create a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../order.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $tableNum, $dishID, $dishName, $quantity, $price, $comments);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../A1.php?error=none");
    exit();
}