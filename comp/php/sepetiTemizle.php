<?php

session_start();

if(isset($_SESSION['email'])) {
    if(isset($_POST['sepettenCikar'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'comp');
        if($conn) {
            $email = $_SESSION['email'];
            $sql = "DELETE from sepet where Email like '%$email%'";
            mysqli_query($conn, $sql);
            echo "<script>window.open('../hesabim.php','_self')</script>";
        } else {
            echo "Connection failed..";
        }
    }
}

?>