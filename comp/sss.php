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
  <h1 class="display-3 text-center mb-3">Sıkça Sorulan Sorular</h1>
  <hr class="my-3">
  <div id="accordion">

    <h3 class="display-4 mb-4">Üyelik Hakkında Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading1">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            Nasıl üye olabilirim?
          </button>
        </h5>
      </div>

      <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
        <div class="card-body">
          comp.com’dan “ÜYE OL” linkine tıklayarak,üyelik formunu doldurup hemen üye olabilir ve alışverişe başlayabilirsiniz. 
          Sitemize üye olmak için herhangi bir ücret ödemeniz gerekmemektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading2">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            Üye olmadan da alışveriş yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
        <div class="card-body">
          Comp'da üye olmadan da alışveriş yapamazsınız.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading3">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            Şifremi unuttum ne yapmalıyım?
          </button>
        </h5>
      </div>

      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
        <div class="card-body">
          Şifrenizi unuttuysanız, üye girişi bölümünde bulunan ‘ŞİFREMİ UNUTTUM’ linkine tıklayıp, gelen sayfadaki kutuya üye olurken 
          belirttiğiniz e-posta adresinizi yazmanız yeterli olacaktır. Şifrenizi değiştirebilmeniz içim mail adresinize 
          bir link gönderilecektir. Linke tıklayarak yeni bir şifre belirleyebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading4">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            Kişisel verilerim korunuyor mu?
          </button>
        </h5>
      </div>

      <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
        <div class="card-body">
          Comp sitesine üye olurken ve alışveriş yaparken sağladığınız kişisel verileriniz 6698 sayılı Kişisel Verilerin 
          Korunması Kanunu (“KVKK”) uyarınca işleme amacı ile bağlantılı, sınırlı ve ölçülü olacak şekilde, 
          işlenmelerini gerektiren amaç çerçevesinde kaydedilir, depolanır, muhafaza edilir, yeniden düzenlenir, 
          hukuken bu kişisel verileri talep etmeye yetkili olan kurumlar ile paylaşılır, KVKK’nın ve diğer 
          kanunların öngördüğü koşullarda üçüncü kişilere aktarılabilir, devredilebilir ve KVKK’da sayılan diğer şekillerde işlenebilir.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">Sipariş Hakkında Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading5">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            Siparişimde değişiklik yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
        <div class="card-body">
          Siparişinizin içerisinde değişiklik yapılamamaktadır. Siparişinizde değişiklik yapmak isterseniz eğer siparişiniz kargoya 
          verilmediyse eski siparişinizin ödemesi iade edilir. Daha sonra tekrar yeni bir sipariş oluşturmanız gerekmektedir. 
          Eğer siparişiniz kargoya teslim edildiyse ürünleri tarafımıza değişim talebiyle göndermeniz gerekmektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading6">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
            Alışverişlerimde hangi ödeme seçeneklerini kullanabilirim?
          </button>
        </h5>
      </div>

      <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
        <div class="card-body">
          Siparişlerinizin ödemesini, Kredi Kartı, Kapıda Ödeme, Banka Kartı, Havale/EFT ve BKM yöntemi ile gerçekleştirebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading7">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
            Siparişim ne kadar sürede elime ulaşır?
          </button>
        </h5>
      </div>

      <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
        <div class="card-body">
          Siparişiniz, ödemenizin onaylanmasından sonra ortalama 2-3 iş günü içerisinde kargoya teslim edilecektir. 
          Özel gün ve haftalar, resmi tatil dönemlerinde ve olağanüstü durumlarda, ürün teslimatlarında gecikmeler yaşanabilir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading8">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
            Yurt dışından sipariş verebilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
        <div class="card-body">
          Yurtdışından sipariş henüz verilememektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading9">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
            Aldığım ürünlerin fiyatına KDV dahil mi?
          </button>
        </h5>
      </div>

      <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
        <div class="card-body">
          Sitemizde görmüş olduğunuz tüm fiyatlara KDV dahildir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading10">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
            Mesafeli satış sözleşmesi nedir?
          </button>
        </h5>
      </div>

      <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
        <div class="card-body">
          Online alışveriş gibi uzaktan gerçekleştirilen satışlarda tüketiciyi koruma amaçlı düzenlenmiş ve 
          tüketicinin siparişini oluşturmadan önce okuyup onaylaması gereken yasal metinlerdir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading11">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
            Siparişimi nasıl iptal edebilirim?
          </button>
        </h5>
      </div>

      <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
        <div class="card-body">
          Comp'da siparişinizi oluşturduktan sonra, eğer ürününüz henüz paketlenmediyse, ''Hesabım/Siparişlerim''bölümünden 
          ''Siparişi İptal Et'' butonuna tıklayarak siparişinizin iptal talebini tarafımıza gönderebilirsiniz. 
          Siparişiniz gün içerisinde iptal edilecektir.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">Kargo ve Teslimat Hakkında Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading12">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
            Hangi kargo firması ile çalışıyorsunuz?
          </button>
        </h5>
      </div>

      <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
        <div class="card-body">
          Ürünlerimizi Aras Kargo, PTT Kargo ve HepsiJet Kargo ile teslim ediyoruz. Aynı şekilde iadelerinizi 
          de Aras Kargo, PTT Kargo ve HepsiJet Kargo ile bize ücretsiz olarak gönderebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading13">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
            Kargo ücreti ne kadar?
          </button>
        </h5>
      </div>

      <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
        <div class="card-body">
          Kargo ücreti her bir siparişiniz için ödeme aşamasında geldiğinizde seçmiş olduğunuz kargo firmasına göre hesaplanacaktır.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading14">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
            Siparişimin kargoya verildiğini nasıl anlayacağım?
          </button>
        </h5>
      </div>

      <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
        <div class="card-body">
          Siparişiniz kargoya teslim edildiğinde, sitemize üye olurken kullanmış olduğunuz mail adresinize kargo takip numaranızı da içeren bir bilgilendirme maili gönderilecektir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading15">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
            Siparişimin teslimat adresini değiştirebilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
        <div class="card-body">
          Sipariş esnasında verilen teslimat adresi daha sonra değiştirilememektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading16">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
            Paket hasarlı geldi. Teslim almalı mıyım?
          </button>
        </h5>
      </div>

      <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
        <div class="card-body">
          Hasarlı gelen paketleri teslim almayıp, kargo görevlisine paketin hasarlı olduğuna dair tutanak tutturmanız gerekmektedir. 
          Daha sonra siparişinizle ilgili müşteri hizmetlerimizle iletişime geçebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading17">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
            Kapıda ödeme yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
        <div class="card-body">
          Comp'da kapıda ödeme seçeneği mevcuttur. Kapıda ödeme nakit ve kredi kartı ile yapilabilmektedir. Kapıda ödeme 
          hizmet bedeli, kargo bedelinden ayrı olarak 5TL ‘dir. Kapıda ödeme hizmet bedeli ürün/ürünleri iade etmeniz 
          durumunda tarafınıza iade edilmez.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">İade Hakkında Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading18">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
            İademi nasıl yapacağım?
          </button>
        </h5>
      </div>

      <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
        <div class="card-body">
          Ürünlerinizi kullanılmamış olmak koşuluyla, tüm ürünleri ve iade formu ile birlikte 
          eksiksiz bir şekilde 30 gün içerisinde ücretsiz olarak iade edebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading19">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
            İade süreci nasıl işliyor?
          </button>
        </h5>
      </div>

      <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
        <div class="card-body">
        -Paketten çıkan iade formunu eksiksiz olarak doldurunuz. <br>
        -İade etmek istediğiniz ürünün kodu, adı, iade nedeni ve istenen diğer bilgiler eksiksiz olarak dordurulmalıdır. <br>
        -Almış olduğunuz ürünleri, anlaşmalı olduğumuz kargo firması PTT Kargo ve Aras Kargo ile ücretsiz olarak gönderebilirsiniz. <br>
        -Aras Kargo müşteri numaramız: 123456789. PTT Kargo müşteri numaramız: 987654321. <br>
        -Bu kodu kargo paketinin üzerine yazınız. <br>
        -Aras Kargo ve PTT Kargo dışındaki kargo firmaları ile gönderilen iadelerin kargo ücreti müşterimize aittir. <br>
        -İadeniz öncelikle Comp müşteri temsilcileri tarafından incelenecek, yukarıda belirtilen şartlara uygun olup olmadığı araştırılacaktır. <br>
        -İade prosedürlerine uygun olan ürünlerin iadesi onaylanacak, ürün ücreti 2 iş günü içerisinde hesabınıza yatırılacaktır. Bu ücretin hesabınıza 
        yansıması banka prosedürleri gereği 7-15 iş gününü bulabilmektedir. <br>
        -Bu 2 günlük süre, Comp'un iade ettiğiniz ürünü almasıyla başlayacaktır. <br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading20">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
            Ürünü nasıl değiştireceğim?
          </button>
        </h5>
      </div>

      <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
        <div class="card-body">
          -Ürün değişimi için, değişim talebinde bulunduğunuz ürünle beraber paketin içinde bulunan iade/değişim 
          formu üzerine, yerine almak istediğiniz ürünün kodunu ve beden bilgisini yazarak Aras Kargo ile tarafımıza 
          ücretsiz olarak gönderebilirsiniz. <br>
          -Yerine almak istediğiniz ürün eğer stoklarımızda varsa değişim işleminiz gerçekleştirilecektir. <br>
          -İstediğiniz ürünün stoklarımızda olmadığı görülürse, müşteri temsilcilerimiz size telefon ile ulaşacaklardır. <br>
          -Aras Kargo dışındaki kargo firmaları ile gönderilen değişimlerin kargo ücreti müşterimize aittir. <br>
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