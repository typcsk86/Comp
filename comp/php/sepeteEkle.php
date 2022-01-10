<?php
session_start();

if(isset($_POST['sepeteEkle'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'comp');
    
    if($conn) {
        if(isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $urunAdi = $_POST['urunAdi'];
            $urunFiyati = $_POST['urunFiyati'];
            $urunAdedi = $_POST['urunAdet'];
            $sql1 = "select * from sepet where Email='$email' and UrunAdi='$urunAdi'";
            $result = $conn->query($sql1);

            if($result->num_rows > 0) {
                echo "Bu ürün zaten sepetinizde..";
                echo "<script>window.open('../hesabim.php','_self')</script>";
            } else {
                $sql2 = "INSERT INTO sepet VALUES('$email', '$urunAdi', '$urunFiyati', '$urunAdedi')";
                $done = $conn->query($sql2);
                echo "<script>window.open('../hesabim.php','_self')</script>";
            }
        } else {
            echo "<script>window.open('../giris.php', '_self')</script>";
        }
    } else {
        echo "Connection failed..";
    }

} 

?>