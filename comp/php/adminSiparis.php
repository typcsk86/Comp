<?php 
$conn = mysqli_connect('localhost', 'root', '', 'comp');
if($conn){
    $sql = "select * from siparis";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        $i = 1;
        echo '<div class="row row-cols-1 row-cols-md-3 g-4 mt-1">';
        while($row=mysqli_fetch_assoc($result)){
            if($row['KargoDurumu'] == "Kargoya verilmedi."){
                echo '<div class="col my-2">';
                echo '<div class="card h-100 border-primary">';
                echo '<div class="card-body">';
                echo '<div class="list-group">';
                echo '<button type="button" class="list-group-item list-group-item-action active" aria-current="true">';
                echo 'Sipariş '.$i;
                echo '</button>';
                echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Email'].'</button>';
                echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Urunler'].'</button>';
                echo '<button type="button" class="list-group-item list-group-item-action">'.$row['ToplamFiyat'].'</button>';
                echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Adres'].'</button>';
                echo '<button type="button" class="list-group-item list-group-item-action list-group-item-danger">'.$row['KargoDurumu'].'</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            $i++;
        }
        echo '</div>';
    }
} else {
    echo "Connection Failed.";
}
?>