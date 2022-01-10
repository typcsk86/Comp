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

<hr class="my-3">

<div class="container my-3">

  <h1 class="display-4 text-center mb-3 text-light bg-dark">Hesabınız</h1>
  <hr class="my-3">

  <div id="accordion">

    <div class="card">

      <div class="card-header bg-info" id="heading1">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            Hesap Bilgileri
          </button>
        </h5>
      </div>
      <?php include "php/hesapBilgileri.php" ?>
      <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
        <div class="card-body">
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="adi" placeholder="Ad" name="adi" value="<?php echo $adi;?>" READONLY>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="soyadi" placeholder="Soyad" name="soyadi" value="<?php echo $soyadi;?>" READONLY>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>" READONLY>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Şifre" name="pwd" value="<?php echo $pwd; ?>" READONLY>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="card">

      <div class="card-header bg-info" id="heading2">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
            Sepetim
          </button>
        </h5>
      </div>

      <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
        <div class="card-body">

          <form action="php/sepetim.php" method="get">
            <?php
              include "C:\\xampp\\htdocs\\comp\\php\\sepetim.php";
            ?>
          </form>

          <form action="php/sepetiTemizle.php" method="post">
            <button class="btn btn-outline-danger float-right ml-2" name="sepettenCikar" id="sepettenCikar">Sepeti Temizle</button>
          </form>

          <button class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#siparisModal">Sipariş Ver</button>

          <div class="modal fade" id="siparisModal" tabindex="-1" role="dialog" aria-labelledby="siparisModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="siparisModalLabel">Sipariş Ver</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="php/siparisver.php" method="POST">

                    <div class="form-group">
                      <label for="toplamFiyat" class="col-form-label">Toplam Fiyat: </label>
                      <?php
                        include "C:\\xampp\\htdocs\\comp\\php\\toplamFiyat.php";
                      ?>
                      <input type="text" class="form-control bg-transparent" id="toplamFiyat" name="toplamFiyat" value="<?php echo $toplamFiyat; ?> TL" READONLY>
                    </div>

                    <div class="form-group">
                      <label for="adres" class="col-form-label">Adres: </label>
                      <textarea class="form-control" id="adres" name="adres" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <div class="container border border-primary mb-2">
                        <label for="hesapNumara" class="col-form-label">Hesap Numarası: </label>
                        <input type="text" class="form-control mb-2" id="hesapNumara" name="hesapNumara" maxlength="16">
                        <label for="sonKullanmaTarihi" class="col-form-label">Son Kullanma Tarihi: </label>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiAy" maxlength="2" placeholder="Ay">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiYil" maxlength="2" placeholder="Yıl">
                          </div>
                        </div>
                        <label for="cvc2" class="col-form-label">CVC2: </label>
                        <input type="text" class="form-control mb-2" maxlength="3" id="cvc2" name="cvc2">
                      </div>
                    </div>
                    <hr class="my-5">
                    <div class="form-group">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                      <button type="submit" class="btn btn-primary" id="siparisVer" name="siparisVer">Sipariş Ver</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="card">

      <div class="card-header bg-info" id="heading3">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
            Siparişlerim
          </button>
        </h5>
      </div>

      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
        <div class="card-body">
          <form action="php/sepetim.php" method="get">
            <?php
              include "C:\\xampp\\htdocs\\comp\\php\\siparislerim.php";
            ?>
          </form>
          <br><br>
        </div>
      </div>

    </div>

    <div class="card">

      <div class="card-header bg-info" id="heading4">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            Şifremi Değiştir
          </button>
        </h5>
      </div>
      <?php include "php/sifreDegistir.php" ?>
      <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
        <div class="card-body">
          <form  method="post" action="<?php $_PHP_SELF?>">
            <div class="form-group">
              <div class="col-sm-10"> 
                <input type="password" class="form-control" id="pwd1" placeholder="Mevcut Şifre" name="pwd1" required>
                <span id="pwd1" class="required"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10"> 
                <input type="password" class="form-control" id="pwd2" placeholder="Yeni Şifre" name="pwd2" required>
                <span id="pwd2" class="required"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10"> 
                <input type="password" class="form-control" id="pwd2_tekrar" placeholder="Yeni Şifre Tekrarı" name="pwd2_tekrar" required>
                <span id="pwd2_tekrar" class="required"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-outline-primary" name="submit">Onayla</button>
              </div>
            </div>
          </form>
        </div>
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