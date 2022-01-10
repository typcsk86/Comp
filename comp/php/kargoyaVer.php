<?php

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if(isset($_POST['kargoyaVer'])){
    if($conn){
        $kargoDurumu = "Kargoya verildi.";
        $sql = "select * from siparis";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                if($row['KargoDurumu'] == "Kargoya verilmedi."){
                    mysqli_query($conn, "UPDATE siparis set kargoDurumu='" . $kargoDurumu . "' WHERE kargoDurumu='" . $row['KargoDurumu'] . "'");
                }
            }
            echo "<script>window.open('../admin.php','_self')</script>";
        } else {
            echo "<script>window.open('../admin.php','_self')</script>";
        }
    } else {
        echo "Connection Failed";
    }
}

?>