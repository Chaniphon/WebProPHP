<?php
    session_start();
    include('server.php');

    $error = array();

    if (!isset($_SESSION['username'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($error, "Username is required");
        }

        if (empty($password)) {
            array_push($error, "Password is required");
        }

        if (count($error) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Your are noe logged in";
                header("location: index.php");
            }else {
                array_push($error, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: index.php");
            }
        }else {
            array_push($error, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: index.php");
        }
    }
?>