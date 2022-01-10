<?php

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if(!$conn) {
    echo "Connection failed..";
}

$search = $_SESSION["email"];
$sql = "select * from uye where email like '%$search%'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $adi = $row['ad'];
        $soyadi = $row['soyad'];
        $email = $row['email'];
        $pwd = $row['sifre'];
    }
}

?>