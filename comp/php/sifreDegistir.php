<?php
$conn = mysqli_connect('localhost', 'root', '', 'comp');

if(!$conn) {
    echo "Connection failed..";
}

$search = $_SESSION["email"];

if (count($_POST) > 0) {

	$result = mysqli_query($conn, "SELECT * from uye WHERE email='" . $_SESSION["email"] . "'");
	$row = mysqli_fetch_array($result);

	if ($_POST["pwd1"] == $row["sifre"]) {

		if($_POST["pwd2"] !== $_POST["pwd2_tekrar"]){
			echo '<script>alert("Yeni şifreniz birbirinden farklı. Yeniden deneyiniz..."); </script>';
			echo "<script>window.open('../comp/hesabim.php','_self')</script>";
		} else {
			mysqli_query($conn, "UPDATE uye set sifre='" . $_POST["pwd2"] . "' WHERE email='" . $_SESSION["email"] . "'");
			echo '<script>alert("Şifreniz değiştirildi."); </script>';
			echo "<script>window.open('../comp/hesabim.php','_self')</script>";
		}
	} else {
		echo '<script>alert("Yanlış şifre girdiniz. Yeniden deneyiniz..."); </script>';
		echo "<script>window.open('../comp/hesabim.php','_self')</script>";
	}
	
}

?>

<script>

function validatePassword() {
    var pwd1, pwd2, pwd2_tekrar, output = true;

    pwd1 = document.frmChange.pwd1;
    pwd2 = document.frmChange.pwd2;
    pwd2_tekrar = document.frmChange.pwd2_tekrar;

    if(pwd1.value == null || pwd2.value == null || pwd2_tekrar.value == null) {
        window.open('../comp/hesabim.php','_self')
    }

    if(!pwd1.value) {
        pwd1.focus();
        document.getElementById("pwd1").innerHTML = "required";
        output = false;
    }
    else if(!pwd2.value) {
        pwd2.focus();
        document.getElementById("pwd2").innerHTML = "required";
        output = false;
    }
    else if(!pwd2_tekrar.value) {
        pwd2_tekrar.focus();
        document.getElementById("pwd2_tekrar").innerHTML = "required";
        output = false;
    }
    if(pwd2.value != pwd2_tekrar.value) {
        pwd2.value="";
        pwd2_tekrar.value="";
        pwd2.focus();
        document.getElementById("pwd2_tekrar").innerHTML = "not same";
        output = false;
    } 
    return output;
}

</script>