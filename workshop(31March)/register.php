<?php
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel= "stylesheet" href= "style.css">
</head>
<body>
    <div class = "header">
        <h2> Register </h2>
    </div>

    <form action="login_db.php" method="post">
        <?php include('error.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class = "error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['errors']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class = "input-group">
            <label for="username"> Username </label>
            <input type="text" name ="username" require>
        </div>
        <div class = "input-group">
            <label for="email"> Email </label>
            <input type="text" name ="email" require>
        </div>
        <div class = "input-group">
            <label for="password_1"> Password </label>
            <input type="text" name ="password_1" require>
        </div>
        <div class = "input-group">
            <label for="password_2"> Password </label>
            <input type="text" name ="password_2" require>
        </div>
        <div class = "input-group">
            <button type="submit" name="reg_user" class="btn"> Login </button>
        </div>
        <p> Already a member? <a href="login.php"> Singn In </a></p>
    </form>

</body>
</html>