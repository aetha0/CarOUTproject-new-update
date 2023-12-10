<?php
$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_dbconnect.php';
    $name = $_POST["userName"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM users WHERE userName='$name' AND password='$password' ";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);


    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['userName']= $name;
        header("location : /welcome.php");

    } else {
        $showError = "Password Do Not match";
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }

        body {
            font-family: "Reem Kufi", sans-serif;
        }

        .main {
            text-align: center;
            padding: 10px;
            margin: 10px;
        }

        .main input,
        select {
            padding: 8px;
            margin: 8px;
            background-color: #e8c39b;
            border: 1px rgb(245, 245, 245);
            border: 1px rgb(266, 266, 266) solid;
            outline: none;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #e8c39b;
            width: 180px;
            font-size: 17px;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {

            background-color: brown;
        }

        #login {
            background-color: #e8c39b;
            color: white;
            padding: 6px;
            margin: 6px;
            border-radius: 3px;
        }

        #login:hover {

            background-color: brown;
        }

        #error {
            background-color: #e8c39b;
            color: green;
            padding: 4px;

        }
    </style>

    <title>Login</title>
</head>

<body>

    <?php

    require 'partials/_nav.php'

    ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully!</strong>  You Are Logged In.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>' . $showError . ' .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }


    ?>



    <div class="main">
        <h1>Log In</h1>
        <form action="/login-reg/login.php" method="POST">

            <input type="text" name="userName" id="username" placeholder="User Name"><br>


            <input type="text" name="password" id="password" placeholder="password"><br>
            <input type="submit" name="submit" id="submit" value="تسجيل الدخول">
        </form>

        <h3>أو</h3>
        <a id="login" href="/login-reg/signup.php" class="submit">إنشاء حساب</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>