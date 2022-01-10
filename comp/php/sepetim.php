<?php
$conn = mysqli_connect('localhost', 'root', '', 'comp');

if($conn) {
    $search = $_SESSION["email"];

    $sql = "select * from sepet where Email like '%$search%'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Ürün Adı</th>';
        echo '<th scope="col">Ürün Fiyatı</th>';
        echo '<th scope="col">Ürün Adedi</th>';
        echo '</tr>';
        echo '</thead>';
        
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tbody>';
            echo '<tr>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="email" value="'.$row['Email'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunAdi" value="'.$row['UrunAdi'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunFiyati" value="'.$row['UrunFiyati'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunAdedi" value="'.$row['UrunAdedi'].'">';
            echo '</td>';
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