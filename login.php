<?php
include 'connector.php';

if (isset($_POST['submitLogin'])) {
    $username = htmlspecialchars($_POST['username_']);
    $password = md5($_POST['password']);

    $sql = "SELECT COUNT(*) FROM user_account WHERE username_ = '$username' AND password_ = '$password'";
    $result = mysqli_query($dbc, $sql);

    $row = mysqli_fetch_assoc($result);
    $hasil = $row['COUNT(*)'];
    session_start();

    if ($hasil > 0) {
        $_SESSION['IsLoggedIn'] = true;
        $_SESSION['username_'] = $username;
        header("Location:homeDashboard.php");
        exit();
    } else {
        header("Location:loginForm.html");
    }
}
