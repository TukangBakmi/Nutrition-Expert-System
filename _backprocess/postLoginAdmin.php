<?php
    session_start();
    include('../_dbConfig/dbconfig.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkPw = $conn->query("SELECT password FROM admin WHERE username = '$username'");

    if ($checkPw->num_rows !== 1) {
        echo "Account not found";
    } else {
        if ($password == $checkPw->fetch_assoc()["password"]) {
            // set session
            $_SESSION['adminName'] = $username;
            echo "$username";
        } else {
            echo "Wrong password";
        }
    }
?>