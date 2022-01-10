<?php

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if($conn) {
    $search = $_SESSION['email'];

    $sql = "select * from sepet where Email like '%$search%'";
    $result = $conn->query($sql);

    $toplamFiyat = 0;

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $urunFiyati = $row['UrunFiyati'];
            $urunFiyati = floatval($urunFiyati);
            $urunFiyati = $urunFiyati * $row['UrunAdedi'];
            $toplamFiyat += $urunFiyati;
        }
    }
} else {
    echo "Connection failed..";
}
?>