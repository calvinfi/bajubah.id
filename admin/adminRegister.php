<?php
session_start();
require "../functions.php";
// CHECK SESSION
if (isset($_SESSION["login"])) {
    header("Location: ../");
    exit;
}

if (isset($_POST['sign-up'])) {
    if (addUser($_POST, "admin") > 0) {
        echo "<script>
                    alert('User berhasil dibuat!');
                    document.location.href = './login.php';
                </script>";
    };
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../framework/css/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>User Sign Up</title>
    <style>
        body {
            background: url("../Asset/carousel-img/img_1.jpeg");
            background-position: center;
            background-size: cover !important;
            background-repeat: none;
            background-origin: content-box;
        }
    </style>
</head>

<body>
    <div class="container position-relative">
        <div class="position-absolute reg-btn">
            <!-- <a href="userRegister.php" class="add-btn px-3 py-2 text-white mr-2">
                <i class="fas fa-user-plus mr-1"></i> Sign Up
            </a> -->
            <a href="./" class="add-btn px-3 py-2 py-2 mx-md-0 mx-5 text-white">
                <i class="fas fa-user-alt mr-1"></i> Sign In
            </a>
        </div>
        <div class="row">
            <div class="col-12 center-content">
                <div class="user-form p-5 text-white">
                    <h2 class="text-center mt-4">
                        <i class="fas fa-user-plus d-block mb-1"></i>
                        <span>Sign Up</span>
                    </h2>
                    <form action="" method="post" class="mx-4 mb-4">
                        <div class="username my-3">
                            <label for="user" class="d-block">Username</label>
                            <input type="username" name="username" id="username" class="d-block" placeholder="Username" required>
                        </div>
                        <div class="user-passwd my-3">
                            <label for="passwd" class="d-block">Password</label>
                            <input type="password" name="passwd" id="passwd" class="d-block" placeholder="User Password" required>
                        </div>
                        <div class="user-passwd-confirm my-3">
                            <label for="passwd-confirm" class="d-block">Confirm Password</label>
                            <input type="password" name="passwd-confirm" id="passwd-confirm" class="d-block" placeholder="Confirm Password" required>
                        </div>
                        <div class="my-3">
                            <button type="submit" name="sign-up" class="sign-btn ml-auto mr-0 d-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b5429a7451.js" crossorigin="anonymous"></script>
</body>

</html>