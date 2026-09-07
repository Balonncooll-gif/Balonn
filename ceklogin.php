<?php
session_start();
include "config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $data['username'];

        header('location: index.php');
        exit;
    } else {
        echo "<p align='center'> Login Gagal</p>";
        header("refresh:1; url=login.php");
        exit;
    }
}
