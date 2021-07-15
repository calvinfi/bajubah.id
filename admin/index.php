<?php
session_start();
require "../functions.php";

// CHECK LOGIN SESSION
if (isset($_SESSION["login"])) {
    header("Location: ../");
    exit;
}

if (isset($_POST["login"])) {
    $user = mysqli_real_escape_string($connect, strtolower($_POST["username"]));
    $passwd = mysqli_real_escape_string($connect, $_POST["passwd"]);
    $result = recordUser($user, "username", "admin");

    if (mysqli_num_rows($result)) {
        $accountChk = mysqli_fetch_assoc($result);

        // CHECK PASSWORD ADMIN
        if (password_verify($passwd, $accountChk["passwd"])) {
            $_SESSION["login"] = true;
            $_SESSION["adminLogin"] = true;
            header("Location: ../");
        }
    }
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
    <title>Login Admin BajuBah.id</title>
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
            <a href="adminRegister.php" class="add-btn px-3 py-2 py-2 mx-md-0 mx-5 text-white">
                <i class="fas fa-user-plus mr-1"></i> Sign Up
            </a>
            <!-- <a href="./" class="add-btn px-3 py-2 text-white">
                <i class="fas fa-user-alt mr-1"></i> Sign In
            </a> -->
        </div>
        <div class="row">
            <div class="col-12 center-content">
                <div class="user-form p-5 text-white">
                    <h2 class="text-center mt-4">
                        <i class="fas fa-user-alt d-block mb-1"></i>
                        <span>LOGIN</span>
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
                        <div class="my-3">
                            <button type="submit" name="login" class="sign-btn ml-auto mr-0 d-block">LOGIN</button>
                        </div>
                        <?php if (isset($error)) : ?>
                            <div class="my-3">
                                <p>
                                    <span class="error-message">*Username/Password yang anda masukkan salah. </span>
                                    <span class="d-block">
                                        <a href="">Forgot Password? </a>
                                        or
                                        <a href="userRegister.php">Register a new account</a>
                                    </span>
                                </p>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/b5429a7451.js" crossorigin="anonymous"></script>
    <script src="framework/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="framework/bootstrap/js/popper.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap.js"></script>
</body>

</html>