<?php

$conn = mysqli_connect('localhost', 'root', '', 'comp');

if($conn) {
    $search = $_SESSION['email'];

    $sql = "select * from siparis where Email like '%$search%'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result)>0){
        echo '<div class="table-responsive">';
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Ürünler</th>';
        echo '<th scope="col">Toplam Fiyat</th>';
        echo '<th scope="col">Kargo Durumu</th>';
        echo '</tr>';
        echo '</thead>';
        while($row=mysqli_fetch_assoc($result)){
            echo '<tbody>';
            echo '<tr>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="email" value="'.$row['Email'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunAdi" value="'.$row['Urunler'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunFiyati" value="'.$row['ToplamFiyat'].'">';
            echo '</td>';
            
            if($row['KargoDurumu'] == "Kargoya verilmedi.") {
                echo '<td>';
                echo '<input type="button" class="btn btn-danger" style="border:none transparent;outline:none;cursor:default;" name="urunAdedi" value="'.$row['KargoDurumu'].'">';
                echo '</td>';
            } else {
                echo '<td>';
                echo '<input type="button" class="btn btn-success" style="border:none transparent;outline:none;cursor:default;" name="urunAdedi" value="'.$row['KargoDurumu'].'">';
                echo '</td>';
            }
            
            echo '</tr>';
            echo '</tbody>';
        }
        echo '</table>';
        echo '</div>';
        echo '<hr class="my-3">';
    }
} else {
    echo "Connection failed..";
}

?>