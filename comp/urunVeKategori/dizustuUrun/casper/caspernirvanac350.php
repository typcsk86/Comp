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
    <link rel="stylesheet" href="../../../css/searchStyle.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../../index.php">
    <img src="https://findicons.com/files/icons/2807/metronome/512/computer.png" alt="Comp" width="30" height="30" class="d-inline-block align-top">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../../index.php">Anasayfa</a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategoriler
        </a>
        <div class="dropdown-menu mb-2 mb-md-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../../kategori/dizustuKategori.php">Dizüstü Bilgisayar</a>
          <a class="dropdown-item" href="../../kategori/masaustuKategori.php">Masaüstü Bilgisayar</a>
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
        <script src="../../../js/searchScript.js"></script>
        <script src="../../../js/suggestionsUrun.js"></script>
      </div>
    </form>

    <form method="post">
      <?php
        if(isset($_SESSION['email'])) {
          echo '<ul class="navbar-nav">';
          echo '<li class="nav-item active mb-2 mb-md-0">';
          echo '<a class="btn btn-outline-primary mr-2" href="../../../hesabim.php">Hesabım</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="../../../php/logout.php">Çıkış Yap</a>';
          echo '</li>';
          echo '</ul>';
        } else {
          echo '<ul class="navbar-nav">';
          echo '<li class="nav-item active mb-2 mb-md-0">';
          echo '<a class="btn btn-outline-primary mr-2" href="../../../giris.php">Giriş Yap</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="../../../kayit.php">Kayıt Ol</a>';
          echo '</li>';
          echo '</ul>';
        }
      ?>
    </form>
  </div>
</nav>

<hr class="my-3">

<br class="my-10">

<div class="container my-5">
  <div class="row mt-3 mb-3">

    <div class="col-12 col-md-6 mb-3 mb-md-0">
      <div class="card p-0 border-0 shadow">
        <div class="card-body">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active" style="background-color:gray;"></li>
              <li data-target="#carousel" data-slide-to="1" style="background-color:gray;"></li>
              <li data-target="#carousel" data-slide-to="2" style="background-color:gray;"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="../../../images/dizustuUrun/casper/casper3-1.jpg" class="d-block w-100" alt="arduinouno0">
              </div>
              <div class="carousel-item">
                  <img src="../../../images/dizustuUrun/casper/casper3-2.jpg" class="d-block w-100" alt="arduinouno0-1">
              </div>
              <div class="carousel-item">
                  <img src="../../../images/dizustuUrun/casper/casper3-3.jpg" class="d-block w-100" alt="arduinouno0-2">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <form method="POST" action="../../../php/sepeteEkle.php">

        <h1><input type="text" style="border:none transparent;outline:none;text-align:left;font-weight:500;" id="urunAdi" name="urunAdi" value="Casper Nirvana c350" readonly></h1>
        <p>Intel Core Pentium N5000 4gb Ram 240gb Ssd Freedos C350.5000-4D00X</p>
        <hr>

        <h6>Ürün Özellikleri</h6>
        <ul class="unstyled">
          <li class="text-muted">
            İşlemci: Intel Pentium
          </li>
          <li class="text-muted">
            SSD Kapasitesi: 240 GB
          </li>
          <li class="text-muted">
            Ekran Boyutu: 14 inç
          </li>
          <li class="text-muted">
            RAM: 4 GB
          </li>
          <li class="text-muted">
            Ekran Kartı: Paylaşımlı
          </li>
        </ul>

        <h2 class="float-right text-primary"><input type="text" class="text-primary mb-5" style="border:none transparent;outline:none;text-align:right;font-weight:500;" id="urunFiyat" name="urunFiyati" value="3340" readonly> ₺</h2>
        <div class="clearfix"></div>
        
        <div class="form-group">
          <div class="input-group">
            <input class="form-control" type="number" min="1" placeholder="Adet" id="urunAdet" name="urunAdet" required>
            <div class="input-group-append">
              <button class="btn btn-outline-primary" name="sepeteEkle" id="sepeteEkle">Sepete Ekle</button>
            </div>
          </div>
        </div>

      </form>
    </div>


  </div>
  <hr class="my-4">
</div>

<div class="container my-5 border border-info rounded">

  <div class="row mt-3 mb-3 ml-1 mr-1">
    <div class="col mb-2 mb-md-0">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group mt-2">
          <textarea class="form-control" id="yorumText" name="yorumText" rows="4" placeholder="Yorum yaz.." required></textarea>
          <p class="invisible" id="urunYol" name="urunYol" value="<?php echo basename($_SERVER['PHP_SELF'], ".php");?>"></p>
        </div>
        <button type="submit" class="btn btn-outline-primary mb-2" id="yorumButton" name="yorumButton">Yorum Yap</button>
        <?php
        if(isset($_POST['yorumButton'])) {
          $conn = mysqli_connect('localhost', 'root', '', 'comp');

          if($conn) {
            if(isset($_SESSION['email'])) {
              $email = $_SESSION['email'];
              $urunYol = basename($_SERVER['PHP_SELF'], ".php");
              $yorum = $_POST['yorumText'];

              $sql1 = "select * from yorum where Email='$email' and UrunYol='$urunYol'";
              $result = $conn->query($sql1);

              if($result->num_rows > 0) {
                echo "Bu ürün hakkında yorumunuz bulunmakta..";
              } else {
                $sql2 = "INSERT INTO yorum VALUES('$email', '$urunYol', '$yorum')";
                $done = $conn->query($sql2);
              }
            }
            else {
              echo "<script>window.open('../../../giris.php', '_self')</script>";
            }
          } else {
            echo "Connection failed..";
          }
        } 
        ?>
      </form>
    </div>
  </div>

  <div class="row mb-3 ml-1 mr-1">
    <div class="col mb-3 mb-md-0">
      <h3 class="display-5 border border-dark rounded text-center">Ürünle İlgili Yorumlar</h5>
    </div>
  </div>

  <div class="row mb-3 ml-1 mr-1">
    <?php 
      $conn = mysqli_connect('localhost', 'root', '', 'comp');
      if($conn) {
        $search = basename($_SERVER['PHP_SELF'], ".php");

        $sql = "select * from yorum where UrunYol like '%$search%'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0) {
          echo '<div class="col mb-3 mb-md-0">';
          while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="form-group mt-2 p-2 border border-success rounded">';
            echo '<input type="text" class="mb-2 mt-1" name="emailGoruntule" value="'.$row['Email'].'" READONLY>';
            echo '<textarea class="form-control" id="yorumGoruntule" name="yorumGoruntule" rows="2" placeholder="'.$row['Yorum'].'"></textarea>';
            echo '</div>';
          }
          echo '</div>';
        } else {
          echo '<div class="col mb-3 mb-md-0">';
          echo '<div class="input-group mt-2 p-2 border border-success rounded">';
          echo '<textarea class="form-control" name="urunBulunamadi" rows="1" placeholder="Bu ürüne ait yorum bulunmamaktadır."></textarea>';
          echo '</div>';
          echo '</div>';
        }

      } else {
        echo "Connection failed..";
      }
    ?>
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
            <a href="../../../index.php" class="text-muted">Anasayfa</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            YARDIM
          </h6>
          <p>
            <a href="../../../hakkinda.php" class="text-muted">Hakkımızda</a>
          </p>
          <p>
            <a href="../../../yasalGereklilik.php" class="text-muted">Yasal Gereklilikler</a>
          </p>
          <p>
            <a href="../../../sss.php" class="text-muted">Sıkça Sorulan Sorular</a>
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