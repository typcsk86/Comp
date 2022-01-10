<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if($conn) {
    $email = $_POST['inputEmail'];
    $sifre = $_POST['inputPassword'];

    $sql = mysqli_query($conn, "select * from uye where email='$email' and sifre='$sifre'");

    if(mysqli_num_rows($sql) < 1 || (empty($email) || empty($sifre))) {
        echo '<script>alert("Yeniden deneyiniz..");</script>';
        echo "<script>window.open('../giris.php','_self')</script>";
    } else {
        $_SESSION['email'] = $email;
    }

    if(isset($_SESSION["email"]) && $email == "admin@gmail.com" && $sifre == "admin") {
        echo "<script>window.open('../admin.php','_self')</script>";
    }else if(isset($_SESSION["email"]))
    {
        echo "<script>window.open('../index.php','_self')</script>";
    }
} else {
    echo "Connection failed..";
}