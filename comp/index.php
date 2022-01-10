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
    <link rel="stylesheet" href="css/searchStyle.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="https://findicons.com/files/icons/2807/metronome/512/computer.png" alt="Comp" width="30" height="30" class="d-inline-block align-top">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategoriler
        </a>
        <div class="dropdown-menu mb-2 mb-md-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="urunVeKategori/kategori/dizustuKategori.php">Dizüstü Bilgisayar</a>
          <a class="dropdown-item" href="urunVeKategori/kategori/masaustuKategori.php">Masaüstü Bilgisayar</a>
        </div>
      </li>
    </ul>

    <form class="form-inline">
      <div class="input-group mr-3 mb-2 mb-md-0 border border-primary rounded">
        <div class="wrapper">
          <div class="search-input">
            <a href="" hidden></a>
            <input type="text" placeholder="Arama.." class="searchText">
            <div class="autocom-box">
                <!-- Arama listesinin sonuçları burada görünür -->
            </div>
            <div class="icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
        <script src="js/searchScript.js"></script>
        <script src="js/suggestionsMain.js"></script>
      </div>
    </form>

    <form method="post">
      <?php
      if(isset($_SESSION['email'])) {
        echo '<ul class="navbar-nav">';
        echo '<li class="nav-item active mb-2 mb-md-0">';
        echo '<a class="btn btn-outline-primary mr-2" href="hesabim.php">Hesabım</a>';
        echo '</li>';
        echo '<li>';
        echo '<a class="btn btn-outline-primary mr-1" href="php/logout.php">Çıkış Yap</a>';
        echo '</li>';
        echo '</ul>';
      } else {
        echo '<ul class="navbar-nav">';
        echo '<li class="nav-item active mb-2 mb-md-0">';
        echo '<a class="btn btn-outline-primary mr-2" href="giris.php">Giriş Yap</a>';
        echo '</li>';
        echo '<li>';
        echo '<a class="btn btn-outline-primary mr-1" href="kayit.php">Kayıt Ol</a>';
        echo '</li>';
        echo '</ul>';
      }
      ?>
      
    </form>
  </div>
</nav>

<hr class="my-3 bg-dark">


<a href="urunVeKategori/kategori/dizustuKategori.php">
<img src="images/index/1920x500.png" class="img-fluid" alt="Responsive image">
</a>

<hr class="my-3 bg-dark">

<div class="container my-5">
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/index/sliderCasper1-1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/index/sliderAsus2-1.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/index/sliderHp2-1.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <br>

  <hr class="my-3">

  <h1 class="display-5 text-center mb-2">Öne Çıkan Ürünler</h1>
  <div class="clearfix"></div>
  <hr>

  <br class="my-10">

  <div class="row row-cols-1 row-cols-md-4">
    <br class="my-10">
    <div class="col mb-4">
      <div class="card h-100 border-info mb-2">
        <img src="images/index/altUrunHp3-1.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">HP 15s</h6>
          <p class="card-text">Intel I5-1135g7 8gb Ram 512gb Ssd 15.6 Inc Fhd</p>
        </div>
        <div class="card-footer bg-transparent">
          <a href="urunVeKategori/dizustuUrun/hp/hp15s.php" class="btn btn-outline-primary btn-block">Satın Al</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 border-info mb-2">
        <img src="images/index/altUrunMsi3-1.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">MSI GP65</h6>
          <p class="card-text">I7-10750h 16gb Ddr4 Gtx1660tı Gddr6 6gb 512gb Ssd 15.6 Fhd 144hz</p>
        </div>
        <div class="card-footer bg-transparent">
          <a href="urunVeKategori/dizustuUrun/msi/msigp65.php" class="btn btn-outline-primary btn-block">Satın Al</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 border-info mb-2 mr-2">
        <img src="images/index/altUrunMsi2-1.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">MSI MPG Trident 3</h6>
          <p class="card-text">Intel Core i7 10700 16GB 512GB SSD GTX1660</p>
        </div>
        <div class="card-footer bg-transparent">
          <a href="urunVeKategori/masaustuUrun/msi/msimpg.php" class="btn btn-outline-primary btn-block">Satın Al</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 border-info mb-2 mr-2">
        <img src="images/index/altUrunAsus3-1.jpg" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Asus GT51CA</h6>
          <p class="card-text">Intel Core I7 6700k 4ghz 64gb 2tb+512 Ssd 8gb Nvıdıa Gtx1080</p>
        </div>
        <div class="card-footer bg-transparent">
          <a href="urunVeKategori/masaustuUrun/asus/asusgt51ca.php" class="btn btn-outline-primary btn-block">Satın Al</a>
        </div>
      </div>
    </div>
  </div>

  <br>

</div>

<footer class="text-center text-lg-start bg-light text-muted">
  <section class="p-4">
    <div class="container text-center text-md-start mt-3">
      
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
          
          <h6 class="text-uppercase fw-bold mb-4">
          <img src="https://findicons.com/files/icons/2807/metronome/512/computer.png" alt="Comp" width="20" height="20" class="d-inline-block align-top">
          COMP
          </h6>
          <p>
            COMP sitesi, 2020 yılında kurulan ve bilgisayar satışı yapılan bir sitedir.
          </p>
        </div>

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            HIZLI ERİŞİM
          </h6>
          <p>
            <a href="index.php" class="text-muted">Anasayfa</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            YARDIM
          </h6>
          <p>
            <a href="hakkinda.php" class="text-muted">Hakkımızda</a>
          </p>
          <p>
            <a href="yasalGereklilik.php" class="text-muted">Yasal Gereklilikler</a>
          </p>
          <p>
            <a href="sss.php" class="text-muted">Sıkça Sorulan Sorular</a>
          </p>
          
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            İLETİŞİM
          </h6>
          <p><i class="fas fa-home me-3"></i> Ankara, Etimesgut</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            comp@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
</footer>

</body>
</html>