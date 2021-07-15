<?php
$connect = mysqli_connect(
    "localhost",
    "cal",
    "300800",
    "test"
);

// CEK KONEKSI
if (!$connect) {
    echo "Koneksi Gagal";
    die;
}

// ACCOUNTREGISTER
function addUser ($input, $regPage)
{
    global $connect;

    $username = mysqli_real_escape_string($connect, strtolower(
            stripcslashes($input["username"])
        )
    );
    $passwd = mysqli_real_escape_string($connect, $input["passwd"]);
    $confirmPasswd = mysqli_real_escape_string($connect, $input["passwd"]);

    // echo "$username, $passwd, $confirmPasswd";
    // exit;

    // CHECK USERNAME
    $chkUser = mysqli_query($connect, "SELECT username FROM $regPage WHERE username = '$username'");
    if ( mysqli_fetch_row($chkUser) ) {
        echo "<script>
            alert('Username is available, try to make different!');
        </script>";
        return false;
    }

    if ( $passwd !== $confirmPasswd ) {
        echo "<script>
            alert('Password not same!!');
        </script>";
        return false;
    }

    // Encrypt Password
    $passwdEncrypt = password_hash($passwd, PASSWORD_DEFAULT);

    // Insert User
    $query = "INSERT INTO $regPage VALUES (
        '',
        '$username',
        '$passwdEncrypt'
    )";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}


// PICK A RECORD DATABASE
function recordUser ($input, $col, $table) {
    global $connect;

    $query = "SELECT * FROM $table WHERE $col = '$input'";
    return mysqli_query($connect, $query);
}