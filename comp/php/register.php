<?php

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if($conn) {
    if(isset($_POST['submit'])) {
        $ad = $_POST['inputName'];
        $soyad = $_POST['inputSurname'];
        $email = $_POST['inputEmail'];
        $sifre = $_POST['inputPassword'];

        if(empty($ad) || empty($soyad) || empty($email) || empty($sifre)) {
            echo "Boş bırakmayın..";
        } else {
            $sql = "INSERT INTO uye VALUES ('$ad', '$soyad', '$email', '$sifre')";
            $done = $conn->query($sql);
            echo "<script>window.open('../index.php', '_self')</script>";
        }
    } else {
        echo "Connection failed..";
    }
}

?>