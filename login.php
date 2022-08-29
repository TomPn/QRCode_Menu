<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="Login">
        <h2>login</h2>
        <div class="Login.form">
            <form action="/includes/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <?php  
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyinput') {
                    echo '<p>Fill in all fields</p>';
                } else if ($_GET['error'] == 'none') {
                    echo '<p>You have signed up!</p>';
                } else if ($_GET['error'] == 'wrongLogin') {
                    echo '<p>Wrong Login Information</p>';
                } 
            }
        ?>
    </section>
</body>