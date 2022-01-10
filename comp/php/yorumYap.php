<?php

session_start();

if(isset($_SESSION['email'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'comp');

    if($conn) {
        if(isset($_POST['yorumButton'])) {
            $email = $_SESSION['email'];
            $urunYol = basename($_SERVER['PHP_SELF'], ".php");
            $yorum = $_POST['yorumText'];

            $sql1 = "select * from yorum where Email='$email'";
            $result = $conn->query($sql1);

            if($result->num_rows > 0) {
                echo "Bu ürün hakkında yorumunuz bulunmakta..";
                echo "<script>window.open('" + $urunYol + ".php','_self')</script>";
            } else {
                $sql2 = "INSERT INTO yorum VALUES('$email', '$urunYol', '$yorum')";
                $done = $conn->query($sql2);
                echo "<script>window.open('" + $urunYol + ".php','_self')</script>";
            }
        }
    } else {
        echo "Connection failed..";
    }
} else {
    echo "<script>window.open('../giris.php', '_self')</script>";
}

?>