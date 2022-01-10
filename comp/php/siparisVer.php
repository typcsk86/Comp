<?php
session_start();

if(isset($_POST['siparisVer'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'comp');

    if($conn) {
        $search = $_SESSION['email'];

        $sql = "select * from sepet where Email like '%$search%'";
        $result = $conn->query($sql);

        $toplamFiyat = 0;

        if(mysqli_num_rows($result) > 0) {
            $email = $search;
            $urunler = "";
            
            while($row = $result->fetch_assoc()) {
                $urunler .= "".$row['UrunAdi']." (".$row['UrunAdedi']."), ";
            }

            $toplamFiyat = $_POST['toplamFiyat'];
            $adres = $_POST['adres'];
            $kargoDurumu = "Kargoya verilmedi.";

            if(empty($_POST['adres']) || empty($_POST['hesapNumara']) || empty($_POST['sonKullanmaTarihiAy']) || empty($_POST['sonKullanmaTarihiYil']) || empty($_POST['cvc2'])) {
                echo "<script>window.open('../hesabim.php','_self')</script>";
            } else {
                $sql2="INSERT INTO siparis VALUES('$email', '$urunler', '$toplamFiyat', '$adres', '$kargoDurumu')";
                $done = $conn->query($sql2);

                if($done) {
                    $sql3 = "DELETE from sepet where Email like '%$email%'";
                    mysqli_query($conn, $sql3);
                    echo "<script>window.open('../hesabim.php','_self')</script>";
                }
            }
        }

    } else {
        echo "Connection failed..";
    }
}

?>