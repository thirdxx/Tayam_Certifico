<?php
session_start();
require "db/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: ./login?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: ./login?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        try {
            $result = $conn->query($sql);
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if ($row['user_name'] === $uname && $row['password'] === $pass) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ./");
                    exit();
                } else {
                    header("Location: ./login?error=Incorect username or password");
                    exit();
                }
            } else {
                header("Location: ./login?error=Incorect username or password");
                exit();
            }
        } catch (Exception $e) {
            header("Location: ./login?error=Incorect username or password");
            exit();
        }
    }
} else {
    header("Location: ./login");
    exit();
}
