<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anasayfa</title>

    <!--Bootstrap-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
    <form method="post">
      <?php
      if(isset($_SESSION['email'])) {
        echo '<ul class="navbar-nav">';
        echo '<li>';
        echo '<a class="btn btn-outline-primary mr-1" href="php/logout.php">Çıkış Yap</a>';
        echo '</li>';
        echo '</ul>';
      }
      ?>
    </form>
  </div>
</nav>

<hr class="my-3">

<div class="container mt-5">
  <div id="accordion"> 
    <div class="card">

      <div class="card-header" id="heading">
        <h5 class="mb-0 d-flex justify-content-between">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
            Siparişler
          </button>
          <form action="php/kargoyaVer.php" method="post">
            <button type="submit" class="btn btn-primary" name="kargoyaVer" id="kargoyaVer">
              Kargoya ver
            </button>
          </form>
        </h5>
      </div>

      <div id="collapse" class="collapse show" aria-labelledby="heading" data-parent="#accordion">
        <div class="container">

        <?php include "php/adminSiparis.php" ?>

        </div>
      </div>

    </div>
  </div>
</div>
    
</body>
</html>