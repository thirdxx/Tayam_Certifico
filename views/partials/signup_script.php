<?php
require "db/db_conn.php";

if (isset($_POST['submit'])) {

    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $pass = $_POST['password'];
    $repeatPwd = $_POST['confirmpassword'];

    $sql = "SELECT * FROM users WHERE user_name='$uname' OR user_email='$uemail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ./signup?error=The username or email is taken, try another");
    } else {
        if ($pass === $repeatPwd) {
            $sql = "INSERT INTO users (user_name, user_email, password) VALUES ('$uname', '$uemail', '$pass')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ./login?success=Your account has been created successfully");
            } else {
                header("Location: ./signup?error=Unknown error occurred");
            }
        } else {
            header("Location: ./signup?error=The passwords do not match");
        }
    }
} else {
    header("Location: ./signup");
    exit();
}
