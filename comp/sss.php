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
          <a class="dropdown-item" href="urunVeKategori/kategori/dizustuKategori.php">Diz??st?? Bilgisayar</a>
          <a class="dropdown-item" href="urunVeKategori/kategori/masaustuKategori.php">Masa??st?? Bilgisayar</a>
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
                <!-- Arama listesinin sonu??lar?? burada g??r??n??r -->
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
          echo '<a class="btn btn-outline-primary mr-2" href="hesabim.php">Hesab??m</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="php/logout.php">????k???? Yap</a>';
          echo '</li>';
          echo '</ul>';
        } else {
          echo '<ul class="navbar-nav">';
          echo '<li class="nav-item active mb-2 mb-md-0">';
          echo '<a class="btn btn-outline-primary mr-2" href="giris.php">Giri?? Yap</a>';
          echo '</li>';
          echo '<li>';
          echo '<a class="btn btn-outline-primary mr-1" href="kayit.php">Kay??t Ol</a>';
          echo '</li>';
          echo '</ul>';
        }
      ?>
    </form>
  </div>
</nav>

<hr class="my-3">

<div class="container my-3">
  <h1 class="display-3 text-center mb-3">S??k??a Sorulan Sorular</h1>
  <hr class="my-3">
  <div id="accordion">

    <h3 class="display-4 mb-4">??yelik Hakk??nda Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading1">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            Nas??l ??ye olabilirim?
          </button>
        </h5>
      </div>

      <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
        <div class="card-body">
          comp.com???dan ?????YE OL??? linkine t??klayarak,??yelik formunu doldurup hemen ??ye olabilir ve al????veri??e ba??layabilirsiniz. 
          Sitemize ??ye olmak i??in herhangi bir ??cret ??demeniz gerekmemektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading2">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            ??ye olmadan da al????veri?? yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
        <div class="card-body">
          Comp'da ??ye olmadan da al????veri?? yapamazs??n??z.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading3">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            ??ifremi unuttum ne yapmal??y??m?
          </button>
        </h5>
      </div>

      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
        <div class="card-body">
          ??ifrenizi unuttuysan??z, ??ye giri??i b??l??m??nde bulunan ???????FREM?? UNUTTUM??? linkine t??klay??p, gelen sayfadaki kutuya ??ye olurken 
          belirtti??iniz e-posta adresinizi yazman??z yeterli olacakt??r. ??ifrenizi de??i??tirebilmeniz i??im mail adresinize 
          bir link g??nderilecektir. Linke t??klayarak yeni bir ??ifre belirleyebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading4">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            Ki??isel verilerim korunuyor mu?
          </button>
        </h5>
      </div>

      <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
        <div class="card-body">
          Comp sitesine ??ye olurken ve al????veri?? yaparken sa??lad??????n??z ki??isel verileriniz 6698 say??l?? Ki??isel Verilerin 
          Korunmas?? Kanunu (???KVKK???) uyar??nca i??leme amac?? ile ba??lant??l??, s??n??rl?? ve ??l????l?? olacak ??ekilde, 
          i??lenmelerini gerektiren ama?? ??er??evesinde kaydedilir, depolan??r, muhafaza edilir, yeniden d??zenlenir, 
          hukuken bu ki??isel verileri talep etmeye yetkili olan kurumlar ile payla????l??r, KVKK???n??n ve di??er 
          kanunlar??n ??ng??rd?????? ko??ullarda ??????nc?? ki??ilere aktar??labilir, devredilebilir ve KVKK???da say??lan di??er ??ekillerde i??lenebilir.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">Sipari?? Hakk??nda Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading5">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            Sipari??imde de??i??iklik yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
        <div class="card-body">
          Sipari??inizin i??erisinde de??i??iklik yap??lamamaktad??r. Sipari??inizde de??i??iklik yapmak isterseniz e??er sipari??iniz kargoya 
          verilmediyse eski sipari??inizin ??demesi iade edilir. Daha sonra tekrar yeni bir sipari?? olu??turman??z gerekmektedir. 
          E??er sipari??iniz kargoya teslim edildiyse ??r??nleri taraf??m??za de??i??im talebiyle g??ndermeniz gerekmektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading6">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
            Al????veri??lerimde hangi ??deme se??eneklerini kullanabilirim?
          </button>
        </h5>
      </div>

      <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
        <div class="card-body">
          Sipari??lerinizin ??demesini, Kredi Kart??, Kap??da ??deme, Banka Kart??, Havale/EFT ve BKM y??ntemi ile ger??ekle??tirebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading7">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
            Sipari??im ne kadar s??rede elime ula????r?
          </button>
        </h5>
      </div>

      <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
        <div class="card-body">
          Sipari??iniz, ??demenizin onaylanmas??ndan sonra ortalama 2-3 i?? g??n?? i??erisinde kargoya teslim edilecektir. 
          ??zel g??n ve haftalar, resmi tatil d??nemlerinde ve ola??an??st?? durumlarda, ??r??n teslimatlar??nda gecikmeler ya??anabilir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading8">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
            Yurt d??????ndan sipari?? verebilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
        <div class="card-body">
          Yurtd??????ndan sipari?? hen??z verilememektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading9">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
            Ald??????m ??r??nlerin fiyat??na KDV dahil mi?
          </button>
        </h5>
      </div>

      <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
        <div class="card-body">
          Sitemizde g??rm???? oldu??unuz t??m fiyatlara KDV dahildir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading10">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
            Mesafeli sat???? s??zle??mesi nedir?
          </button>
        </h5>
      </div>

      <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
        <div class="card-body">
          Online al????veri?? gibi uzaktan ger??ekle??tirilen sat????larda t??keticiyi koruma ama??l?? d??zenlenmi?? ve 
          t??keticinin sipari??ini olu??turmadan ??nce okuyup onaylamas?? gereken yasal metinlerdir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading11">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
            Sipari??imi nas??l iptal edebilirim?
          </button>
        </h5>
      </div>

      <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
        <div class="card-body">
          Comp'da sipari??inizi olu??turduktan sonra, e??er ??r??n??n??z hen??z paketlenmediyse, ''Hesab??m/Sipari??lerim''b??l??m??nden 
          ''Sipari??i ??ptal Et'' butonuna t??klayarak sipari??inizin iptal talebini taraf??m??za g??nderebilirsiniz. 
          Sipari??iniz g??n i??erisinde iptal edilecektir.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">Kargo ve Teslimat Hakk??nda Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading12">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
            Hangi kargo firmas?? ile ??al??????yorsunuz?
          </button>
        </h5>
      </div>

      <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
        <div class="card-body">
          ??r??nlerimizi Aras Kargo, PTT Kargo ve HepsiJet Kargo ile teslim ediyoruz. Ayn?? ??ekilde iadelerinizi 
          de Aras Kargo, PTT Kargo ve HepsiJet Kargo ile bize ??cretsiz olarak g??nderebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading13">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
            Kargo ??creti ne kadar?
          </button>
        </h5>
      </div>

      <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
        <div class="card-body">
          Kargo ??creti her bir sipari??iniz i??in ??deme a??amas??nda geldi??inizde se??mi?? oldu??unuz kargo firmas??na g??re hesaplanacakt??r.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading14">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
            Sipari??imin kargoya verildi??ini nas??l anlayaca????m?
          </button>
        </h5>
      </div>

      <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
        <div class="card-body">
          Sipari??iniz kargoya teslim edildi??inde, sitemize ??ye olurken kullanm???? oldu??unuz mail adresinize kargo takip numaran??z?? da i??eren bir bilgilendirme maili g??nderilecektir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading15">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
            Sipari??imin teslimat adresini de??i??tirebilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
        <div class="card-body">
          Sipari?? esnas??nda verilen teslimat adresi daha sonra de??i??tirilememektedir.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading16">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
            Paket hasarl?? geldi. Teslim almal?? m??y??m?
          </button>
        </h5>
      </div>

      <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
        <div class="card-body">
          Hasarl?? gelen paketleri teslim almay??p, kargo g??revlisine paketin hasarl?? oldu??una dair tutanak tutturman??z gerekmektedir. 
          Daha sonra sipari??inizle ilgili m????teri hizmetlerimizle ileti??ime ge??ebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading17">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
            Kap??da ??deme yapabilir miyim?
          </button>
        </h5>
      </div>

      <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
        <div class="card-body">
          Comp'da kap??da ??deme se??ene??i mevcuttur. Kap??da ??deme nakit ve kredi kart?? ile yapilabilmektedir. Kap??da ??deme 
          hizmet bedeli, kargo bedelinden ayr?? olarak 5TL ???dir. Kap??da ??deme hizmet bedeli ??r??n/??r??nleri iade etmeniz 
          durumunda taraf??n??za iade edilmez.
        </div>
      </div>
    </div>

    <hr class="my-3">
    <h3 class="display-4 mb-4">??ade Hakk??nda Sorular</h3>

    <div class="card">
      <div class="card-header bg-info" id="heading18">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
            ??ademi nas??l yapaca????m?
          </button>
        </h5>
      </div>

      <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
        <div class="card-body">
          ??r??nlerinizi kullan??lmam???? olmak ko??uluyla, t??m ??r??nleri ve iade formu ile birlikte 
          eksiksiz bir ??ekilde 30 g??n i??erisinde ??cretsiz olarak iade edebilirsiniz.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading19">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
            ??ade s??reci nas??l i??liyor?
          </button>
        </h5>
      </div>

      <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
        <div class="card-body">
        -Paketten ????kan iade formunu eksiksiz olarak doldurunuz. <br>
        -??ade etmek istedi??iniz ??r??n??n kodu, ad??, iade nedeni ve istenen di??er bilgiler eksiksiz olarak dordurulmal??d??r. <br>
        -Alm???? oldu??unuz ??r??nleri, anla??mal?? oldu??umuz kargo firmas?? PTT Kargo ve Aras Kargo ile ??cretsiz olarak g??nderebilirsiniz. <br>
        -Aras Kargo m????teri numaram??z: 123456789. PTT Kargo m????teri numaram??z: 987654321. <br>
        -Bu kodu kargo paketinin ??zerine yaz??n??z. <br>
        -Aras Kargo ve PTT Kargo d??????ndaki kargo firmalar?? ile g??nderilen iadelerin kargo ??creti m????terimize aittir. <br>
        -??adeniz ??ncelikle Comp m????teri temsilcileri taraf??ndan incelenecek, yukar??da belirtilen ??artlara uygun olup olmad?????? ara??t??r??lacakt??r. <br>
        -??ade prosed??rlerine uygun olan ??r??nlerin iadesi onaylanacak, ??r??n ??creti 2 i?? g??n?? i??erisinde hesab??n??za yat??r??lacakt??r. Bu ??cretin hesab??n??za 
        yans??mas?? banka prosed??rleri gere??i 7-15 i?? g??n??n?? bulabilmektedir. <br>
        -Bu 2 g??nl??k s??re, Comp'un iade etti??iniz ??r??n?? almas??yla ba??layacakt??r. <br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-info" id="heading20">
        <h5 class="mb-0">
          <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
            ??r??n?? nas??l de??i??tirece??im?
          </button>
        </h5>
      </div>

      <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
        <div class="card-body">
          -??r??n de??i??imi i??in, de??i??im talebinde bulundu??unuz ??r??nle beraber paketin i??inde bulunan iade/de??i??im 
          formu ??zerine, yerine almak istedi??iniz ??r??n??n kodunu ve beden bilgisini yazarak Aras Kargo ile taraf??m??za 
          ??cretsiz olarak g??nderebilirsiniz. <br>
          -Yerine almak istedi??iniz ??r??n e??er stoklar??m??zda varsa de??i??im i??leminiz ger??ekle??tirilecektir. <br>
          -??stedi??iniz ??r??n??n stoklar??m??zda olmad?????? g??r??l??rse, m????teri temsilcilerimiz size telefon ile ula??acaklard??r. <br>
          -Aras Kargo d??????ndaki kargo firmalar?? ile g??nderilen de??i??imlerin kargo ??creti m????terimize aittir. <br>
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
            COMP sitesi, 2020 y??l??nda kurulan ve bilgisayar sat?????? yap??lan bir sitedir.
          </p>
        </div>

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            HIZLI ER??????M
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
            <a href="hakkinda.php" class="text-muted">Hakk??m??zda</a>
          </p>
          <p>
            <a href="yasalGereklilik.php" class="text-muted">Yasal Gereklilikler</a>
          </p>
          <p>
            <a href="sss.php" class="text-muted">S??k??a Sorulan Sorular</a>
          </p>
          
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-3">
          <h6 class="text-uppercase fw-bold mb-4">
            ??LET??????M
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