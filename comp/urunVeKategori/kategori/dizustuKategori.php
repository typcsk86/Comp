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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/searchStyle.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="../../js/urunlerDizustuApp.js"></script>

</head>
<body onload="ajaxSet()">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../index.php">
    <img src="https://findicons.com/files/icons/2807/metronome/512/computer.png" alt="Comp" width="30" height="30" class="d-inline-block align-top">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Anasayfa</a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategoriler
        </a>
        <div class="dropdown-menu mb-2 mb-md-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dizustuKategori.php">Dizüstü Bilgisayar</a>
          <a class="dropdown-item" href="masaustuKategori.php">Masaüstü Bilgisayar</a>
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
        <script src="../../js/searchScript.js"></script>
        <script src="../../js/suggestionsKategori.js"></script>
      </div>
    </form>

    <form method="post">
      <?php
        if(isset($_SESSION['email'])) {
          echo '<ul class="navbar-nav">';
          echo '<li class="nav-item active mb-2 mb-md-0">';
          echo '<a class="btn btn-outline-primary mr-2" href="../../hesabim.php">Hesabım</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="../../php/logout.php">Çıkış Yap</a>';
          echo '</li>';
          echo '</ul>';
        } else {
          echo '<ul class="navbar-nav">';
          echo '<li class="nav-item active mb-2 mb-md-0">';
          echo '<a class="btn btn-outline-primary mr-2" href="../../giris.php">Giriş Yap</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="../../kayit.php">Kayıt Ol</a>';
          echo '</li>';
          echo '</ul>';
        }
      ?>
    </form>
  </div>
</nav>

<div class="container mt-3">

  <h1 class="display-4 text-center">Dizüstü Bilgisayarlar</h1>
  <hr class="mt-3 mb-3">

  <div class="row mt-3 p-2">

    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3 border-right">
      <form>
        <!-- MARKA -->
        <p class="mt-1 font-weight-bold text-info">Marka</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="casper" id="defaultCheck1" name="marka">
          <label class="form-check-label" for="defaultCheck1">
            Casper
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="acer" id="defaultCheck1" name="marka">
          <label class="form-check-label" for="defaultCheck1">
            Acer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="asus" id="defaultCheck1" name="marka">
          <label class="form-check-label" for="defaultCheck1">
            Asus
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="hp" id="defaultCheck1" name="marka">
          <label class="form-check-label" for="defaultCheck1">
            Hp
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="msi" id="defaultCheck1" name="marka">
          <label class="form-check-label" for="defaultCheck1">
            Msi
          </label>
        </div>

        <!-- -->

        <!-- KULLANIM AMACI -->

        <hr class="mt-3 mb-3">

        <p class="mt-1 font-weight-bold text-info">Kullanım Amacı</p>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="dizustu" id="defaultCheck4" name="amac">
          <label class="form-check-label" for="defaultCheck4">
            Dizüstü Bilgisayar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="notebook" id="defaultCheck5" name="amac">
          <label class="form-check-label" for="defaultCheck5">
            Notebook
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="gaming" id="defaultCheck6" name="amac">
          <label class="form-check-label" for="defaultCheck61">
            Gamingbook
          </label>
        </div>

        <hr class="mt-3 mb-3">

        <button id="filtreler" type="button" class="btn btn-block btn-outline-primary mt-2 mb-3" onclick="findParameters()">Filtreleri Uygula</button>


      </form>
    </div>

    <div class="col-md-9 col-lg-9 col-xl-9 mx-auto mb-3 ">
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-4" id="urunBolumu" >
        
      </div>
    </div>

  </div>

</div>

<hr class="my-3">

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
            <a href="../../index.php" class="text-muted">Anasayfa</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            YARDIM
          </h6>
          <p>
            <a href="../../hakkinda.php" class="text-muted">Hakkımızda</a>
          </p>
          <p>
            <a href="../../yasalGereklilik.php" class="text-muted">Yasal Gereklilikler</a>
          </p>
          <p>
            <a href="../../sss.php" class="text-muted">Sıkça Sorulan Sorular</a>
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

<script>

var valMarka = [];
var valAmac = [];
var markaParameters = "";
var amacParameters = "";

function findParameters() {

  $("input[name='marka']:checked").each(function(i){
    valMarka[i] = $(this).val();
  });

  $("input[name='amac']:checked").each(function(i){
    valAmac[i] = $(this).val();
  });

  setParameters();
}

function setParameters() {
  var searchParams = new URLSearchParams(window.location.search)

    for(i=0; i<valMarka.length; i++) {
        if(i+1 == valMarka.length) {
            markaParameters += valMarka[i];
            break;
        }
        markaParameters += valMarka[i] + "-";
    }
    
    for(i=0; i<valAmac.length; i++) {
        if(i+1 == valAmac.length) {
            amacParameters += valAmac[i];
            break;
        }
        amacParameters += valAmac[i] + "-";
    }
    
    searchParams.set('marka', markaParameters);
    window.location.search = searchParams.toString();

    searchParams.set('amac', amacParameters);
    window.location.search = searchParams.toString();

}

</script>