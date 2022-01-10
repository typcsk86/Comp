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
  <h1 class="display-4 text-center mb-5">Yasal Gereklilikler</h1>
  <div class="row border border-info rounded">
    <div class="col-4 mt-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Üyelik Sözleşmesi</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Mesafeli Satış Sözleşmesi</a>
        <a class="list-group-item list-group-item-action" id="list-kvk-list" data-toggle="list" href="#list-kvk" role="tab" aria-controls="kvk">Kişisel Verilerin Korunması</a>
      </div>
    </div>

    <div class="col-8 mt-4 mb-3">
      <div class="tab-content" id="nav-tabContent">
      
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><h1 class="text-center mb-3">Üyelik Sözleşmesi</h1>
          comp.com web sitesine girmeniz veya web sitedeki herhangi bir bilgiyi kullanmanız aşağıdaki hüküm ve koşulları kabul ettiğiniz anlamına gelmektedir.
          Bu internet sitesine girilmesi, sitenin ya da sitedeki bilgilerin ve diğer verilerin programların vs. kullanılması sebebiyle, sözleşmenin ihlali, haksız fiil, 
          ya da başkaca sebeplere binaen, doğabilecek doğrudan ya da dolaylı hiçbir zarardan Comp sorumlu değildir. 

          <br><br>

          Comp, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti hususunda herhangi bir sorumluluk kabul etmez.
          Comp, işbu site ve site uzantısında mevcut her tür hizmet, ürün, siteyi kullanma koşulları ile sitede sunulan bilgileri önceden bir ihtara gerek olmaksızın değiştirme, 
          siteyi yeniden organize etme, yayını durdurma hakkını saklı tutar. 

          <br><br>

          Değişiklikler sitede yayım anında yürürlüğe girer. Sitenin kullanımı ya da siteye giriş ile bu değişiklikler de kabul edilmiş sayılır. Bu koşullar link verilen diğer web sayfaları için de geçerlidir.
          Comp, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti, silinme, kayıp, işlemin veya iletişimin gecikmesi, 
          bilgisayar virüsü, iletişim hatası, hırsızlık, imha veya izinsiz olarak kayıtlara girilmesi, değiştirilmesi veya kullanılması hususunda herhangi bir sorumluluk kabul etmez.
          Bu internet sitesi Comp'un kontrolü altında olmayan başka internet sitelerine bağlantı veya referans içerebilir. 

          <br><br>

          Comp, bu sitelerin içerikleri veya içerdikleri diğer bağlantılardan sorumlu değildir.
          Comp bu internet sitesinin genel görünüm ve dizaynı ile internet sitesindeki tüm bilgi, resim, Comp markası ve diğer markalar, comp.com alan adı, logo, ikon, demonstratif, 
          yazılı, elektronik, grafik veya makinede okunabilir şekilde sunulan teknik veriler, bilgisayar yazılımları, uygulanan satış sistemi, 
          iş metodu ve iş modeli de dahil tüm materyallerin ("Materyaller") ve bunlara ilişkin fikri ve sınai mülkiyet haklarının sahibi veya lisans sahibidir ve yasal koruma altındadır. 

          <br><br>

          İnternet sitesinde bulunan hiçbir Materyal; önceden izin alınmadan ve kaynak gösterilmeden, kod ve yazılım da dahil olmak üzere, değiştirilemez, kopyalanamaz, 
          çoğaltılamaz, başka bir lisana çevrilemez, yeniden yayımlanamaz, başka bir bilgisayara yüklenemez, postalanamaz, iletilemez, sunulamaz ya da dağıtılamaz. 
          İnternet sitesinin bütünü veya bir kısmı başka bir internet sitesinde izinsiz olarak kullanılamaz. Aksine hareketler hukuki ve cezai sorumluluğu gerektirir. 

          <br><br>
          
          Comp'un burada açıkça belirtilmeyen diğer tüm hakları saklıdır.
          comp.com'dan alışveriş yapmak için üyelik gerekmektedir. comp.com'dan alışveriş yapan kişiler, bunun kişisel kullanım amaçlı bir alışveriş olduğunu, 
          yeniden satış amaçlı olmadığını kabul etmiş olurlar. Havale veya EFT siparişlerinin işleme alınma tarihi, siparişin verildiği tarih değil, sipariş 
          toplam tutarının Comp banka hesaplarına ulaştığının görüldüğü tarihtir. Havale veya EFT yoluyla verilen, ancak 1 hafta içerisinde ödemesi gerçekleştirilmeyen 
          siparişler iptal edilmektedir. Comp, dilediği zaman bu yasal uyarı sayfasının içeriğini güncelleme yetkisini saklı tutmaktadır.
        </div>

        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><h1 class="text-center mb-3">Mesafeli Satış Sözleşmesi</h1>

          1. TARAFLAR <br>

          ALICI ; ( Sözleşmede bundan sonra " ALICI" olarak anılacaktır ) <br>
          Alıcı " www.comp.com.tr " adlı alışveriş sitesine üye olan ve online olarak sipariş veren müşteriyi temsil eder. <br>
          SATICI ; ( Sözleşmede bundan sonra "SATICI" olarak anılacaktır) <br>
          Ticari Unvan: Comp Ltd. Şti. <br>
          Adres: Ankara/Etimesgut <br>
          Telefon: 0216 528 66 66 <br>
          E-mail: comp@gmail.com <br>
          Web adresi: www.comp.com.tr <br>
          <br>
          2. KONU <br>
          <br>
          İşbu Sözleşme, ALICI’nın, SATICI’ya ait internet sitesi üzerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen ürünün satışı 
          ve teslimi ile ilgili olarak 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği hükümleri gereğince tarafların hak ve yükümlülüklerini 
          düzenler. ALICI, SATICININ isim, unvan, açık adres, telefon ve diğer erişim bilgileri, satışa konu malın temel nitelikleri, vergiler dahil olmak üzere satış fiyatı, 
          ödeme sekli, teslimat koşulları ve masrafları vs. satışa konu mal ile ilgili tüm ön bilgiler ve “cayma” hakkının kullanılması ve bu hakkın nasıl kullanılacağı, şikayet 
          ve itirazlarını iletebilecekleri resmi makamlar vs. konusunda açık, anlaşılır ve internet ortamına uygun şekilde satıcı tarafından bilgilendirildiğini, bu ön bilgileri 
          elektronik ortamda teyit ettiğini ve sonrasında sözleşme konusu siparişi onayladığı taktirde sipariş konusu bedeli ve varsa kargo ücreti, vergi gibi belirtilen ek ücretleri 
          ödeme yükümlülüğü altına girdiğini is bu sözleşme hükümlerince kabul ve beyan eder. <br>
          <br>
          3. SÖZLEŞME KONUSU ÜRÜN/ÜRÜNLER BİLGİLERİ <br>
          <br>
          Malın /Ürün/Ürünlerin/ Hizmetin temel özellikleri (türü, miktarı, marka/modeli, rengi, adedi) SATICI’ya ait internet sitesinde yayınlanmaktadır. 
          SATICI tarafından kampanya düzenlenmiş ise ilgili ürünün temel özelliklerini kampanya süresince incelenebilir ve kampanya tarihine kadar geçerlidir. <br>
          <br>
          3.2. Listelenen ve sitede ilan edilen fiyatlar KDV dahil satış fiyatıdır. İlan edilen fiyatlar ve vaatler güncelleme yapılana ve değiştirilene kadar 
          geçerlidir ( İfa imkansızlığı ve bilişim sistemi hatasından kaynaklanan durumlara ilişkin sözleşmenin 5.3. maddesi hükümleri saklıdır. ). 
          Süreli olarak ilan edilen fiyatlar ise belirtilen süre sonuna kadar geçerlidir. <br>
          <br>
          3.3. Sözleşme konusu mal ya da hizmetin vergiler dahil satış fiyatı aşağıda gösterilmiş olup, ALICI tarafından karşılanacaktır. ALICI, aşağıda yer 
          alan bilgilerin doğru olduğunu, doğru olmaması veya noksan olması halinde doğacak zararları karşılamayı kabul, beyan ve taahhüt eder. <br>
          <br>
          Ürün Açıklaması / Adet / Birim Fiyatı / Ara Toplam / KDV Dahil / Kargo Tutarı / Toplam / Ödeme Şekli ve Planı / Teslimat Adresi / Teslim Edilecek Kişi 
          / Fatura Adresi / Sipariş Tarihi / Teslimat Tarihi / Teslim Şekli <br>
          <br>
          3.4. Ürün sevkiyat masrafı olan kargo ücreti ALICI tarafından ödenecektir. <br>
          <br>
          4. FATURA BİLGİLERİ <br>
          <br>
          Ad/Soyad/Unvan <br>
          Adres <br>
          Telefon <br>
          Faks <br>
          Eposta/kullanıcı adı <br>
          <br>
          Fatura teslim: Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte teslim edilecektir. <br>

          5. SATICININ HAK VE YÜKÜMLÜLÜKLERİ <br>

          5.1. SATICI sözleşme ile kendisine yüklenen edimleri mücbir sebepler haricinde ayıptan ari, eksiksiz ve sağlam bir şekilde yerine getirilmesinden, 
          siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri ve kullanım kılavuzları ile teslim edilmesinden sorumludur. <br>
          <br>
          5.2. Sözleşme konusu her bir ürün, 30 günlük yasal süreyi aşmamak kaydı ile ALICI' nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki 
          ön bilgiler kısmında belirtilen süre zarfında ALICI veya ALICI’nın gösterdiği adresteki kişi ve/veya kuruluşa teslim edilir. ALICI’ya önceden 
          yazılı olarak veya veri taşıyıcısı ile bildirilmek koşulu ile bu süre en fazla 10 gün uzatılabilir. 30 günlük teslimat süresi içinde ürünün 
          ALICI’ya teslim edilememesi durumunda, ALICI’nın sözleşmeyi feshetme hakkı saklıdır. Sözleşme konusu ürünün ALICI’dan başka kişi ve/veya kuruluşa 
          teslim edilmesi gereken hallerde ALICI haricindeki kişi ve/veya kuruluşun teslimatı kabul etmemesinden SATICI sorumlu tutulamaz. <br>
          <br>
          5.3. SATICI, sipariş konusu ürün veya hizmetin yerine getirilmesinin imkânsızlaşması halinde ve yine bilişim sisteminde oluşan hata veya arıza 
          sonucu ürüne ait özellik, model veya fiyat yönünden ortaya çıkacak hata halleri nedeni ile sözleşme konusu yükümlülüklerini yerine getiremezse, 
          bu durumu, öğrendiği tarihten itibaren 3 gün içinde yazılı olarak ve/veya mail, sms v.b. gibi iletişim yollarıyla veya kalıcı veri saklayıcısı 
          ile tüketiciye bildireceğini, 14 günlük süre içinde toplam bedeli ALICI’ya iade edeceğini kabul, beyan ve taahhüt eder. ALICI da ifanın imkansızlaşması 
          nedeniyle SATICI’dan her ne nam altında olursa olsun tazminat talebinde bulunmayacaktır. <br>
          <br>
          5.4. SATICI, tarafların iradesi dışında gelişen, önceden öngörülemeyen ve tarafların borçlarını yerine getirmesini engelleyici ve/veya geciktirici 
          hallerin oluşması gibi mücbir sebep halleri nedeni ile sözleşme konusu ürünü süresi içinde teslim edemez ise, durumu ALICI'ya bildireceğini kabul, 
          beyan ve taahhüt eder. <br>
          <br>
          ALICI da siparişin iptal edilmesini, sözleşme konusu ürünün varsa emsali ile değiştirilmesini ve/veya teslimat süresinin engelleyici durumun 
          ortadan kalkmasına kadar ertelenmesini SATICI’dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI’nın 
          nakit ile (havale-eft ile) yaptığı ödemelerde, ürün tutarı 14 gün içinde alıcıya ait bankaya defaten ödenir. ALICI’nın kredi kartı ile 
          yaptığı ödemelerde ise, ürün tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 gün içerisinde ilgili bankaya iade edilir. 
          ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama sürecin 2 ile 3 
          haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI’nın hesaplarına yansıması halinin tamamen banka işlem süreci ile ilgili 
          olduğundan, ALICI, olası gecikmeler için SATICI’yı sorumlu tutamayacağını kabul, beyan ve taahhüt eder. <br>
          <br>
          5.5. ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya ürünün ALICI’ya tesliminden evvel, siparişte 
          kullanılan kredi kartına ilişkin güvenlik açığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik ve iletişim 
          bilgilerini, siparişte kullanılan kredi kartının bir önceki aya ait ekstresini yahut kart hamilinin bankasından kredi kartının kendisine 
          ait olduğuna ilişkin yazıyı ibraz etmesini ALICI’dan talep edebilir. ALICI’nın talebe konu bilgi/belgeleri temin etmesine kadar geçecek 
          sürede sipariş dondurulacak olup, mezkur taleplerin 24 saat içerisinde karşılanmaması halinde ise SATICI, siparişi iptal etme hakkını haizdir. <br>
          <br>
          5.6. İşbu sözleşme içerisinde sayılan maddelerden bir ya da birkaçını ihlal eden üye işbu ihlal nedeniyle cezai ve hukuki olarak şahsen 
          sorumlu olup, SATICI’yı bu ihlallerin hukuki ve cezai sonuçlarından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle, olayın hukuk alanına 
          intikal ettirilmesi halinde, SATICI’nın üyeye karşı üyelik sözleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır. <br>
          <br>
          5.7. SATICI ALICI’nın vermiş olduğu bilgiler gerçekle örtüşmediğinde siparişi durdurma hakkını saklı tutar. <br>
          <br>
          5.8. ALICI, sözleşme konusu mal/hizmeti teslim almadan önce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı 
          ve ayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul 
          edilecektir. Teslimden sonra mal/hizmetin özenle korunması borcu, ALICI’ya aittir. Cayma hakkı kullanılacaksa mal/hizmet 
          kullanılmamalıdır. Fatura iade edilmelidir. <br>
          <br>
          5.9. SATICI’ya ait internet sitesinin üzerinden, SATICI’nın kendi kontrolünde olmayan ve/veya başkaca üçüncü kişilerin 
          sahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka içeriklere link verilebilir. Bu linkler ALICI’ya 
          yönlenme kolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte 
          ve Link verilen web sitesinin içerdiği bilgilere yönelik herhangi bir taahüt veya garanti niteliği taşımamaktadır. <br>
          <br>
          5.10. Kargo firmasının, ürünü ALICI’ ya teslimi aşamasında karşılaşacağı her türlü sorun nedeniyle, siparişi verilen 
          ürünün ALICI' ya teslim edilememesinden dolayı SATICI sorumlu tutulamaz. <br>
          <br>
          6. ALICININ HAK VE YÜKÜMLÜLÜKLERİ <br>
          <br>
          6.1. ALICI, SATICI’ya ait internet sitesinde sözleşme konusu ürünün temel nitelikleri, satış fiyatı ve ödeme şekli 
          ile teslimata ilişkin ön bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini, 
          ödemeyi gerçekleştireceğini kabul, beyan ve taahhüt eder. <br>
          <br>
          6.2. ALICI, sözleşme konusu ürünün teslimatı için işbu Sözleşme’yi elektronik ortamda teyit edeceğini, herhangi bir nedenle 
          sözleşme konusu ürün bedelinin ödenmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI’nın sözleşme konusu 
          ürünü teslim yükümlülüğünün sona ereceğini kabul, beyan ve taahhüt eder. <br>
          <br>
          6.3. ALICI, Sözleşme konusu ürünün ALICI veya ALICI’nın gösterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra 
          ALICI'ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda sözleşme konusu ürün bedelinin ilgili banka 
          veya finans kuruluşu tarafından SATICI'ya ödenmemesi halinde, ALICI Sözleşme konusu ürünü 3 gün içerisinde nakliye gideri 
          ALICI’ya ait olacak şekilde SATICI’ya iade edeceğini kabul, beyan ve taahhüt eder. <br>
          <br>
          6.4. SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından güncellenen adresi, 
          e-posta adresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri üzerinden mektup, e-posta, SMS, telefon görüşmesi 
          ve diğer yollarla ALICI’ya ulaşma hakkı bulunmaktadır. ALICI, işbu sözleşmeyi kabul etmekle SATICI’nın kendisiyle 
          iletişimde bulunabileceğini kabul ve beyan etmektedir. <br>
          <br>
          6.5. ALICI, SATICI’ya ait internet sitesine üye olurken verdiği kişisel ve diğer sair bilgilerin gerçeğe uygun olduğunu, SATICI’nın 
          bu bilgilerin gerçeğe aykırılığı nedeniyle uğrayacağı tüm zararları, SATICI’nın ilk bildirimi üzerine derhal, nakden ve 
          defaten tazmin edeceğini beyan ve taahhüt eder. <br>
          <br>
          6.6. ALICI, SATICI’ya ait internet sitesini kullanırken yasal mevzuat hükümlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul 
          ve taahhüt eder. Aksi takdirde, doğacak tüm hukuki ve cezai yükümlülükler tamamen ve münhasıran ALICI’yı bağlayacaktır. <br>
          <br>
          7. CAYMA HAKKI <br>
          <br>
          7.1. ALICI; ürünün kendisine veya gösterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on dört) gün içerisinde, SATICI’ya 
          bildirmek şartıyla hiçbir hukuki ve cezai sorumluluk üstlenmeksizin ve hiçbir gerekçe göstermeksizin malı reddederek sözleşmeden 
          cayma hakkını kullanabilir. Cayma hakkının kullanımından kaynaklanan masraflar SATICI’ ya aittir. ALICI, iş bu sözleşmeyi kabul etmekle, 
          cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder. <br>
          <br>
          7.2. Cayma hakkının kullanılması için 14 (ondört) günlük süre içinde ALICI’nın SATICI' ya iadeli taahhütlü posta, faks veya eposta ile 
          yazılı bildirimde bulunması gereklidir. Cayma hakkının kullanımına ilişkin ispat yükümlülüğü ALICI’ya aittir. <br>
          <br>
          7.3. Cayma bildiriminin SATICI’ya ulaşmasından itibaren 14 (ondört) günlük süre içerisinde, ALICI’nın ürünü satın alırken kullandığı 
          ödeme aracına uygun bir şekilde tek seferde SATICI tarafından geri ödeme yapılacaktır. <br>
          <br>
          7.4. SATICI tarafından malın geri alınacağına dair bir teklif olmadığı sürece, ALICI cayma hakkını SATICI’ya yönlendirdiği andan 
          itibaren 10 (on) gün içinde malı/ürünü kutusu, tamamlayıcı aksesuarları, varsa mal ile birlikte hediye edilen ürünleri ile birlikte 
          eksiksiz ve hasarsız olarak SATICI’ya geri göndermek zorundadır. Söz konusu ürün ve aksesuarların süresinde satıcıya gönderilmemesi 
          durumunda alıcının cayma talebinin gereği yerine getirilmeyecektir. <br>
          <br>
          7.5. Ürünün ambalajının ve içeriğinin hasar görmesi veya bozulmuş olması veya tekrar satışa arz edilemeyecek duruma getirilmesi halinde 
          ALICI cayma hakkını kullanamaz. Ayrıca, Mesafeli Satışlar Yönetmeliği’nde belirtilen şekilde cayma hakkının kullanılamayacağı haller 
          saklıdır. ALICI tarafından ambalajı açılmış cd, dvd gibi ses veya görüntü kayıtları, yazılım programları ve bilgisayar sarf malzemeleri, 
          ALICI’nın özel istekleri veya onun kişisel ihtiyaçları doğrultusunda üretilen (üzerinde değişiklik ya da ilaveler yapılarak kişiye/kişisel 
          ihtiyaçlara özel hale getirilenler dahil) mallar, ALICI onayı ile cayma hakkı süresi içinde ifasına başlanan hizmetler ve ilgili mevzuat 
          uyarınca mesafeli satış kapsamı dışında kabul edilen diğer mal-hizmetler ile ilgili de cayma hakkı kullanılamaz. <br>
          <br>
          7.6. ALICI’ nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imkânsızlaşırsa ALICI kusuru oranında 
          SATICI’ nın zararlarını tazmin etmekle yükümlüdür. Ancak cayma hakkı süresi içinde malın veya ürünün usulüne uygun kullanılması 
          sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir. <br>
          <br>
          7.7. Satın alma işleminin ALICI tarafından kredi kartı ile ve taksitli olarak gerçekleştirilmesi halinde, SATICI, Bankaya ürün bedelini 
          tek seferde ödedikten sonra, ALICI ürünü kaç taksit ile satın alma talebini iletmiş ise Banka tarafından ALICI’ya geri ödeme de aynı 
          şekilde taksitle iade edilecektir. <br>
          <br>
          7.8. Bu hakkın ( CAYMA HAKKININ) kullanılması halinde; <br>
          <br>
          a) 3. kişiye veya ALICI’ ya teslim edilen ürünün orijinal faturası, <br>
          <br>
          b) Ürün tesliminde gönderilmiş olan İade formu (ALICI tarafından imzalı olarak), <br>
          <br>
          c) İade edilecek ürünlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir. <br>
          <br>
          d) İade bedeli SATICI’ya aittir. <br>
          <br>
          7.9. İade edilmek istenen ürünün faturası kurumsal ise, iade ederken kurumun düzenlemiş olduğu iade faturası ile birlikte gönderilmesi 
          gerekmektedir. Faturası kurumlar adına düzenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır. <br>
          <br>
          7.10. Cayma hakkının kullanılması nedeniyle SATICI tarafından düzenlenen kampanya limit tutarının altına düşülmesi halinde kampanya 
          kapsamında faydalanılan indirim miktarı iptal edilir. <br>
          <br>
          7.11. Satın alınan elektronik ürünlerde, sim kart takılması, WİFİ ile network bağlantı kurulması, kurulum yapılması, sarf 
          malzemesinin kullanılmış olması, koruyucu bantların çıkarılmış olması, aktivasyon yapılması ve kullanıcı yaratılması halinde 
          iade kabul edilmemektedir. <br>
          <br>
          8. TEMERRÜT HALİ VE HUKUKİ SONUÇLARI <br>
          <br>
          ALICI’nın borcundan dolayı temerrüde düşmesi halinde, borcun gecikmeli ifasından dolayı SATICI’nın uğradığı zarar ve ziyanını ödeyeceğini 
          kabul, beyan ve taahhüt eder. Ödemenin kredi kartı ile gerçekleştirildiği hallerde ALICI bankaya karşı sorumlu olduğunu kabul, 
          beyan ve taahhüt eder. <br>
          <br>
          9. DELİL ANLAŞMASI VE YETKİLİ MAHKEME <br>
          <br>
          Bu Sözleşme'den ve/veya uygulanmasından doğabilecek her türlü uyuşmazlığın çözümünde SATICI ticari defter ve internet kayıtları 
          (bilgisayar-ses kayıtları gibi manyetik ortamdaki kayıtlar dahil) kesin delil oluşturur. <br>
          <br>
          İşbu sözleşmeden doğan uyuşmazlıklarda Ticaret Bakanlığı tarafından ilan edilen parasal değere göre tüketici hakem heyetleri 
          ile tüketici mahkemeleri yetkilidir. Buna göre 2019 yılı için geçerli olmak kaydıyla, değeri 5.650 (beşbinaltıyüzelli) Türk 
          Lirasının altında bulunan uyuşmazlıklarda İlçe Tüketici Hakem Heyetleri, Büyükşehir statüsünde olan illerde 5.650 (beşbinaltıyüzelli) 
          Türk Lirası ile 8.480 (sekizbindörtyüzseksen) Türk Lirası arasındaki uyuşmazlıklarda İl Tüketici Hakem Heyetleri, Büyükşehir 
          statüsünde olmayan illerin merkezlerinde 8.480 (sekizbindörtyüzseksen) Türk Lirasının altında bulunan uyuşmazlıklarda İl Tüketici 
          Hakem Heyetleri, Büyükşehir statüsünde olmayan illere bağlı ilçelerde 5.650 (beşbinaltıyüzelli) Türk Lirası ile 8.480 
          (sekizbindörtyüzseksen) Türk Lirası arasındaki uyuşmazlıklarda İl Tüketici Hakem Heyetleri, başvuru zorunludur. Bu değerlerin üzerindeki 
          uyuşmazlıklar için tüketici hakem heyetlerine başvuru yapılamaz. <br>
          <br>
          10. YÜRÜRLÜK VE SÖZLEŞME TARİHİ <br>
          <br>
          ALICI, Site üzerinden sipariş verdiği anda işbu sözleşmenin tüm şartlarını kabul etmiş sayılır. SATICI, siparişin gerçekleşmesi öncesinde 
          işbu sözleşmenin sitede ALICI tarafından okunup kabul edildiğine dair onay alacak şekilde gerekli yazılımsal düzenlemeleri yapmakla 
          yükümlüdür. Sözleşme tarihi sipariş tarihidir. <br>
          <br>

          İADE POLİTİKASI <br>
          <br>
          İade koşulları Nelerdir? <br>
          <br>
          Kargodan ürününüzü teslim aldığınız günden itibaren 14 gün içinde www.comp.com.tr’ye iade başvurusunda bulunabilirsiniz. 
          İade başvurunuzdan itibaren 10 gün içinde ürünü kargoyla göndermeniz gerekmektedir. İade kapsamında gönderilen ürünler için kargo ücreti SATICI’ ya aittir. <br>
          <br>
          İade kapsamındaki koşullar aşağıdaki gibidir: <br>
          <br>
          • İade edeceğiniz ürüne ait, hediye olarak verilen promosyonlu, kampanyalı ürünlerin de orijinal ambalajları ile beraber, ürünle aynı anda iade edilmesi gerekmektedir. <br>
          <br>
          • İadelerde ürünle beraber ürünün orijinal kutu/ambalajı, orijinal faturası, ve ürünle gelen iade formu da doldurulup imzalanarak gönderilmelidir. <br>
          <br>
          • Ürüne ait bütün standart aksesuarlar hasarsız ve tam olarak orijinal paketleri ile birlikte gönderilmelidir. <br>

        </div>

        <div class="tab-pane fade" id="list-kvk" role="tabpanel" aria-labelledby="list-kvk-list"><h1 class="text-center mb-3">Kişisel Verilerin Korunması</h1>

          1. Yasal Dayanak Anayasa’nın 20. maddesinde düzenlenen; herkesin, kendisiyle ilgili kişisel verilerin korunmasını isteme hakkına sahip olduğu, 
          bu hakkın; kişinin kendisiyle ilgili kişisel veriler hakkında bilgilendirilme, bu verilere erişme, bunların düzeltilmesini veya silinmesini 
          talep etme ve amaçları doğrultusunda kullanılıp kullanılmadığını öğrenmeyi de kapsadığını, kişisel verilerin, ancak kanunda öngörülen hallerde 
          veya kişinin açık rızasıyla işlenebileceğini temel yasal dayanak alarak 6698 sayılı Kişisel Verilerin Korunması Kanunu uyarınca Kişisel 
          Verilerin hukuka uygun olarak korunması ve işlenmesine azami önem veriyor ve tüm planlama ve faaliyetlerimizde bu özenle hareket ediyoruz. 
          Şirket olarak, özel hayatın gizliliğinin temeli olan Kişisel Verilerin korunması ve işlenmesi için tüm idari ve teknik tedbirleri alıyor 
          personelimize 5237 sayılı Türk Ceza Kanununun (TCK) 135.madde ve devamında düzenlenen yasal yaptırımlar konusunda bilgilendirme ve uyarılarda bulunuyoruz. <br>
          <br>
          2. Amaç Yürürlükte bulunan 6698 sayılı Kişisel Verilerin Korunması hakkındaki Kanunu ile kişisel verilerin işlenmesinde, başta özel hayatın 
          gizliliği olmak üzere kişilerin temel hak ve özgürlüklerinin korunması ve kişisel verileri işleyen gerçek ve tüzel kişilerin yükümlülükleri 
          ile uyacakları usul ve esaslar düzenlenmiştir. Söz konusu düzenleme de dikkate alınarak hazırlanan politikamızın amacı; kişisel verilerin 
          korunması hakkındaki yükümlülüklere uyumun sağlanması, Şirketimizin gerçekleştirdiği faaliyetler kapsamında temin edilen bilgilerin işlenmesi, 
          aktarılması ve gizliliğinin korunması ile ilgili hususların risk temelli bir yaklaşımla değerlendirilerek, stratejilerin, kurum içi kontrol 
          ve önlemlerin, işleyiş kurallarının ve sorumlulukların belirlenmesi ile kurum çalışanlarının bu konularda bilinçlendirilmesidir. Aynı 
          zamanda; müşterilerimiz, potansiyel müşterilerimiz, çalışanlarımız, çalışan adaylarımız, Şirket hissedarlarımız, Şirket yetkililerimiz, 
          ziyaretçilerimiz, işbirliği içinde olduğumuz kurum/kuruluşların çalışanları, hissedarları ve yetkilileri ve üçüncü kişiler başta olmak üzere 
          kişisel verileri Şirketimiz tarafından işlenen kişileri bilgilendirilerek şeffaflığı sağlamak amaçlanmaktadır. <br>
          <br>
          3. Kapsam Bu politika; müşterilerimizin, potansiyel müşterilerimizin, çalışanlarımızın, çalışan adaylarımızın, Şirket hissedarlarının, 
          Şirket yetkililerinin, ziyaretçilerimizin, işbirliği içinde olduğumuz kurumların çalışanları, hissedarları ve yetkililerinin ve üçüncü 
          kişilerin otomatik olan ya da herhangi bir veri kayıt sisteminin parçası olmak kaydıyla otomatik olmayan yollarla işlenen tüm kişisel 
          verilerine ilişkindir. <br>
          <br>
          4. Tanımlar Açık Rıza: Belirli bir konuya ilişkin bilgilendirilmeye dayanan ve özgür iradeyle açıklanan rıza. Anonim Hale Getirme: 
          Kişisel verinin, kimliği belli veya belirlenebilir biri ile ilişkilendirilebilme niteliğini kaybedecek ve bu durumun geri alınamayacağı şekilde 
          değiştirilmesidir. Örnek: Maskeleme, toplulaştırma, veri bozma vb. tekniklerle kişisel verinin bir gerçek kişi ile ilişkilendirilemeyecek hale 
          getirilmesi. Çalışan: Şirket ile arasında yapılmış olan iş akdi gereğince Şirkette çalışmakta olan kişiler Çalışan Adayı: Şirket ya herhangi 
          bir yolla iş başvurusunda bulunmuş ya da özgeçmiş ve ilgili bilgilerini Şirketin incelemesine açmış olan gerçek kişiler<br>
          <br>
          İşbirliği İçerisinde Olduğumuz Kurumların Çalışanları, Hissedarları ve Yetkilileri: Şirketin her türlü iş ilişkisi içerisinde bulunduğu 
          kurumlarda (iş ortağı, tedarikçi gibi, ancak bunlarla sınırlı olmaksızın) çalışan, bu kurumların hissedarları ve yetkilileri dahil olmak 
          üzere, gerçek kişiler. Kişisel Verilerin İşlenmesi: Kişisel verilerin tamamen veya kısmen otomatik olan ya da herhangi bir veri kayıt 
          sisteminin parçası olmak kaydıyla otomatik olmayan yollarla elde edilmesi, kaydedilmesi, depolanması, muhafaza edilmesi, değiştirilmesi, 
          yeniden düzenlenmesi, açıklanması, aktarılması, devralınması, elde edilebilir hâle getirilmesi, sınıflandırılması ya da kullanılmasının 
          engellenmesi gibi veriler üzerinde gerçekleştirilen her türlü işlem. Kişisel Veri Sahibi: Kişisel verisi işlenen gerçek kişidir. Örneğin; 
          müşteriler ve çalışanlar. Kişisel Veri: Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü bilgi. Tüzel kişilere ilişkin 
          bilgilerin işlenmesi kanun kapsamında değildir. Örneğin; ad-soyadı, TC, e-posta, adres, doğum tarihi, kredi kartı numarası vb. Müşteri: 
          Şirket ile herhangi bir sözleşmesel ilişkisi olup olmadığına bakılmaksızın Şirketin sunmuş olduğu ürün ve hizmetleri kullanan veya kullanmış 
          olan gerçek kişiler Özel Nitelikli Kişisel Veri: Irk, etnik köken, siyasi düşünce, felsefi inanç, din, mezhep veya diğer inançlar, 
          kılık kıyafet, dernek vakıf ya da sendika üyeliği, sağlık, cinsel hayat, ceza mahkûmiyeti ve güvenlik tedbirleriyle ilgili veriler ile 
          biyometrik ve genetik veriler özel nitelikli verilerdir. Potansiyel Müşteri: Ürün ve hizmetlerimize kullanma talebinde veya ilgisinde 
          bulunmuş veya bu ilgiye sahip olabileceği ticari teamül ve dürüstlük kurallarına uygun olarak değerlendirilmiş gerçek kişiler Şirket 
          Hissedarı: Şirketin hissedarı gerçek kişiler Şirket Yetkilisi: Şirketin yönetim kurulu üyesi ve diğer yetkili gerçek kişiler Üçüncü Kişi: 
          Şirketin yukarıda bahsi geçen taraflarla arasındaki ticari işlem güvenliğini sağlamak veya bahsi geçen kişilerin haklarını korumak ve 
          menfaat temin etmek üzere bu kişilerle ilişkili olan üçüncü taraf gerçek kişiler (Örn. Aile Bireyleri ve yakınlar) Veri İşleyen : Veri 
          sorumlusunun verdiği yetkiye dayanarak onun adına kişisel veri işleyen gerçek ve tüzel kişidir. Örneğin, Şirketin verilerini tutan firma 
          veya şirketler vb. Veri Sorumlusu: Kişisel verilerin işlenme amaçlarını ve vasıtalarını belirleyen, verilerin sistematik bir şekilde 
          tutulduğu yeri (veri kayıt sistemi) yöneten, veri sahibinin talebi / başvurusu neticesinde kişisel bilgileri ile ilgili veri sahibine 
          gerekli bilgiyi sağlayan ve yönlendirmeleri yapan kişi veri sorumlusudur. Ziyaretçi: Şirketin sahip olduğu fiziksel yerleşkelere çeşitli 
          amaçlarla girmiş olan veya internet sitelerimizi ziyaret eden gerçek kişiler <br>
          <br>
          5. Kısaltmalar KVKK: 6698 sayılı Kanun 7 Nisan 2016 tarihli ve 29677 sayılı Resmi Gazete ’de yayımlanan, 24 Mart 2016 tarihli ve 6698 
          sayılı Kişisel Verilerin Korunması Kanunu. Anayasa: 9 Kasım 1982 tarihli ve 17863 sayılı Resmi Gazete ‘de yayımlanan; 7 Kasım 1982 tarihli 
          ve 2709 sayılı Türkiye Cumhuriyeti Anayasası. KVK Kurulu: Kişisel Verileri Koruma Kurulu KVK Kurumu: Kişisel Verileri Koruma Kurumu 
          Politika: Şirket Kişisel Verilerin Korunması ve İşlenmesi Politikası TBK: 4 Şubat 2011 tarihli ve 27836 sayılı Resmi Gazete ‘de yayımlanan; 
          11 Ocak 2011 tarihli ve 6098 sayılı Türk Borçlar Kanunu. TCK: 12 Ekim 2004 tarihli ve 25611 sayılı Resmi Gazete ‘de yayımlanan; 26 Eylül 
          2004 tarihli ve 5237 sayılı Türk Ceza Kanunu. TTK: 14 Şubat 2011 tarihli ve 27846 sayılı Resmi Gazete ‘de yayımlanan;13 Ocak 2011 tarihli ve 
          6102 sayılı Türk Ticaret Kanunu <br>
          <br>
          6. Veri Kategorileri Şirket aşağıdaki veri kategorilerine ilişkin verileri kaydedebilir, işleyebilir veya aktarabilir. Kimlik Bilgisi: 
          Ad soyad, anne - baba adı, doğum tarihi, doğum yeri, medeni hali, nüfus cüzdanı seri sıra no, tc kimlik no gibi İletişim: Adres no, 
          e-posta adresi, iletişim adresi, kayıtlı elektronik posta adresi (KEP), telefon no gibi Lokasyon: Bulunduğu yerin konum bilgileri Özlük: 
          Bordro bilgileri, disiplin soruşturması, işe giriş-çıkış belgesi kayıtları, özgeçmiş bilgileri, performans değerlendirme raporları gibi 
          Hukuki İşlem: Adli makamlarla yazışmalardaki bilgiler, dava dosyasındaki bilgiler gibi Müşteri İşlem: Fatura, senet, çek bilgileri, sipariş 
          bilgisi, talep bilgisi gibi Fiziksel Mekan Güvenliği: Çalışan ve ziyaretçilerin giriş çıkış kayıt bilgileri, kamera kayıtları gibi İşlem 
          Güvenliği: IP adresi bilgileri, internet sitesi giriş çıkış bilgileri, şifre ve parola bilgileri gibi Risk Yönetimi: Ticari, teknik, idari 
          risklerin yönetilmesi için işlenen bilgiler gibi Finans: Bilanço bilgileri, finansal performans bilgileri, kredi ve risk bilgileri gibi 
          Mesleki Deneyim: Diploma bilgileri, gidilen kurslar, meslek içi eğitim bilgileri, sertifikalar, transkript bilgileri gibi Pazarlama: 
          Alışveriş geçmişi bilgileri, anket, çerez kayıtları, kampanya çalışmasıyla elde edilen bilgiler Görsel ve İşitsel Kayıtlar: Görsel ve 
          işitsel kayıtlar gibi Sağlık Bilgileri: Engellilik durumuna ait bilgiler, kan grubu bilgisi, kişisel sağlık bilgileri, kullanılan cihaz 
          ve protez bilgileri gibi Ceza Mahkûmiyeti Ve Güvenlik Tedbirleri: Ceza mahkûmiyetine ilişkin bilgiler, güvenlik tedbirlerine ilişkin bilgiler gibi <br>
          <br>
          7. Kişisel Veri İşleme Amaçları Şirket aşağıdaki amaçlara göre kişisel verileri kaydedebilir, işleyebilir veya aktarabilir. <br>
          <br>
          • Acil Durum Yönetimi Süreçlerinin Yürütülmesi <br>
          • Bilgi Güvenliği Süreçlerinin Yürütülmesi <br>
          • Çalışan Adayı / Stajyer / Öğrenci Seçme Ve Yerleştirme Süreçlerinin Yürütülmesi <br>
          • Çalışan Adaylarının Başvuru Süreçlerinin Yürütülmesi <br>
          • Çalışan Memnuniyeti Ve Bağlılığı Süreçlerinin Yürütülmesi <br>
          • Çalışanlar İçin İş Akdi Ve Mevzuattan Kaynaklı Yükümlülüklerin Yerine Getirilmesi <br>
          • Çalışanlar İçin Yan Haklar Ve Menfaatleri Süreçlerinin Yürütülmesi <br>
          • Denetim / Etik Faaliyetlerinin Yürütülmesi <br>
          • Eğitim Faaliyetlerinin Yürütülmesi <br>
          • Erişim Yetkilerinin Yürütülmesi <br>
          • Faaliyetlerin Mevzuata Uygun Yürütülmesi <br>
          • Finans Ve Muhasebe İşlerinin Yürütülmesi <br>
          • Firma / Ürün / Hizmetlere Bağlılık Süreçlerinin Yürütülmesi <br>
          • Fiziksel Mekan Güvenliğinin Temini <br>
          • Görevlendirme Süreçlerinin Yürütülmesi <br>
          • Hukuk İşlerinin Takibi Ve Yürütülmesi <br>
          • İç Denetim/ Soruşturma / İstihbarat Faaliyetlerinin Yürütülmesi <br>
          • İletişim Faaliyetlerinin Yürütülmesi <br>
          • İnsan Kaynakları Süreçlerinin Planlanması <br>
          • İş Faaliyetlerinin Yürütülmesi / Denetimi <br>
          • İş Sağlığı / Güvenliği Faaliyetlerinin Yürütülmesi <br>
          • İş Süreçlerinin İyileştirilmesine Yönelik Önerilerin Alınması Ve Değerlendirilmesi <br>
          • İş Sürekliliğinin Sağlanması Faaliyetlerinin Yürütülmesi <br>
          • Lojistik Faaliyetlerinin Yürütülmesi <br>
          • Mal / Hizmet Satın Alım Süreçlerinin Yürütülmesi <br>
          • Mal / Hizmet Satış Sonrası Destek Hizmetlerinin Yürütülmesi <br>
          • Mal / Hizmet Satış Süreçlerinin Yürütülmesi <br>
          • Mal / Hizmet Üretim Ve Operasyon Süreçlerinin Yürütülmesi <br>
          • Müşteri İlişkileri Yönetimi Süreçlerinin Yürütülmesi <br>
          • Müşteri Memnuniyetine Yönelik Aktivitelerin Yürütülmesi <br>
          • Organizasyon Ve Etkinlik Yönetimi <br>
          • Pazarlama Analiz Çalışmalarının Yürütülmesi <br>
          • Performans Değerlendirme Süreçlerinin Yürütülmesi <br>
          • Reklam / Kampanya / Promosyon Süreçlerinin Yürütülmesi <br>
          • Risk Yönetimi Süreçlerinin Yürütülmesi <br>
          • Saklama Ve Arşiv Faaliyetlerinin Yürütülmesi <br>
          • Sosyal Sorumluluk Ve Sivil Toplum Aktivitelerinin Yürütülmesi <br>
          • Sözleşme Süreçlerinin Yürütülmesi <br>
          • Sponsorluk Faaliyetlerinin Yürütülmesi <br>
          • Stratejik Planlama Faaliyetlerinin Yürütülmesi <br>
          • Talep / Şikayetlerin Takibi <br>
          • Taşınır Mal Ve Kaynakların Güvenliğinin Temini <br>
          • Tedarik Zinciri Yönetimi Süreçlerinin Yürütülmesi <br>
          • Ücret Politikasının Yürütülmesi <br>
          • Ürün / Hizmetlerin Pazarlama Süreçlerinin Yürütülmesi <br>
          • Veri Sorumlusu Operasyonlarının Güvenliğinin Temini <br>
          • Yabancı Personel Çalışma Ve Oturma İzni İşlemleri <br>
          • Yatırım Süreçlerinin Yürütülmesi <br>
          • Yetenek / Kariyer Gelişimi Faaliyetlerinin Yürütülmesi <br>
          • Yetkili Kişi, Kurum Ve Kuruluşlara Bilgi Verilmesi <br>
          • Yönetim Faaliyetlerinin Yürütülmesi <br>
          • Ziyaretçi Kayıtlarının Oluşturulması Ve Takibi 8. Kişisel Veri Aktarım Alıcı Grupları Şirket aşağıdaki Kişisel Veri 
          Aktarı Alıcı gruplarına kişisel verileri aktarabilir. i. Hissedarlar ii. İş Ortağı iii. İştirak Ve Bağlı Ortaklıklar 
          iv. Tedarikçi v. Topluluk Şirketi vi. Yetkili Kamu Kurum Ve Kuruluşları vii. Gerçek Kişiler Ve Özel Hukuk Tüzel Kişileri 
          9. Kişisel Veri Konusu Kişiler Şirket aşağıdaki kişi türlerine göre kişisel verileri kaydedebilir, işleyebilir veya 
          aktarabilir. i. Çalışan Adayı ii. Çalışan iii. Hissedar/Ortak iv. Potansiyel Ürün Ve Hizmet Alıcısı v. Stajyer vi. 
          Tedarikçi Çalışan vii. Tedarikçi Yetkilisi viii. Ürün Veya Hizmet Alan Kişi ix. Ziyaretçi 10. Kişisel Veri Saklama Süreleri 
          Kişisel verileri saklama süreleri Kişisel veri Saklama ve İmha politikasında ayrıntılı olarak düzenlenmiştir. 11. Kişisel 
          Verilerin Silinmesi, Yok Edilmesi veya Anonim Hale Getirilmesi <br>
          • Kişisel verilerin hukuka uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde 
          bu veriler, resen veya ilgili kişinin talebi üzerine veri sorumlusu tarafından silinir, yok edilir veya anonim hâle getirilir. <br>
          • Veri sorumlusu, kişisel verileri silme, yok etme veya anonim hale getirme yükümlülüğünün ortaya çıktığı tarihi takip eden 
          ilk periyodik imha işleminde, kişisel verileri siler, yok eder veya anonim hale getirir. <br>
          • Bu hususlara ilişkin yapılması gereken işlemler Kişisel veri saklama ve imha politikasında ayrıntılı olarak açıklanmıştır. 
          12. Kişisel Verilerin Aktarılması Kanunda belirtilen genel ilkeler çerçevesinde işlenmek üzere elde edilen kişisel veriler, 
          ilgili kişinin açık rızası alınmak suretiyle üçüncü kişilere aktarılabilir. Yurt içi aktarım: Kişisel veri ve özel nitelikteki 
          kişisel verilerin yurt içinde aktarımına ilişkin ayrıntılar Kişisel Verilerin Aktarılması prosedüründe düzenlenmiştir. Yurt 
          dışı aktarım: İlgili kişinin açık rızasının bulunması şartıyla Kanunda belirtilen hallerin varlığı halinde Yeterli korumanın 
          bulunduğu ülkelere kişisel veri aktarımı yapılabilir. Yeterli korumanın bulunmadığı ülkelere veri aktarımı ise Kanunda 
          belirtilen hallerin varlığı, açık rızanın olmasına ek olarak yeterli korumanın yazılı olarak taahhüt edilmesi ve Kurulun 
          izninin bulunması durumlarında gerçekleştirilebilir. 13. Kişisel Verilerin İşlenmesinde Genel (Temel) İlkeler Kişisel veriler 
          Kişisel verilerin işlenmesi prosedüründe ayrıntılı olarak belirtildiği şekilde aşağıdaki temel ilkelere uygun olarak işlenecektir. <br>
          • Hukuka ve dürüstlük kurallarına uygun olma, <br>
          • Doğru ve gerektiğinde güncel olma, <br>
          • Belirli, açık ve meşru amaçlar için işlenme, <br>
          • İşlendikleri amaçla bağlantılı, sınırlı ve ölçülü olma, <br>
          • İlgili mevzuatta öngörülen veya işlendikleri amaç için gerekli olan süre kadar muhafaza edilme. 14. Açık Rıza Belirli bir konuya 
          ilişkin, bilgilendirilmeye dayanan ve özgür iradeyle açıklanan rızadır. Açık rıza alma prosedüründe ayrıntılı olarak belirtildiği 
          üzere Açık Rıza’nın belirli bir konuya ilişkin olması, Rızanın bilgilendirmeye dayanması ve özgür iradeyle açıklanması gereklidir. 
          15. Aydınlatma Yükümlülüğü Kişisel verilerin elde edilmesi sırasında şirket tarafından ilgili kişilerin bilgilendirilir. Aydınlatma 
          Prosedüründe ayrıntılı olarak düzenlendiği üzere bu bilgilendirme asgari olarak aşağıdaki konuları içermektedir. <br>
          • Veri sorumlusunun ve varsa temsilcisinin kimliği, <br>
          • Kişisel verilerin hangi amaçla işleneceği, <br>
          • Kişisel verilerin kimlere ve hangi amaçla aktarılabileceği, <br>
          • Kişisel veri toplamanın yöntemi ve hukuki sebebi, <br>
          • İlgili kişinin Kanunun 11 inci maddesinde sayılan diğer hakları. 16. İlgili Kişinin Hak Arama Yöntemleri İlgili kişilerin, 
          Şirkete başvurarak; kendileriyle ilgili kişisel verilerin işlenip işlenmediğini öğrenmek, işlenmişse bunları talep etmek, 
          verinin muhtevasının eksik veya yanlış olması halinde bunların düzeltilmesini, hukuka aykırı olması halinde ise silinmesini, 
          yok edilmesini ve buna göre yapılacak işlemlerin verilerin açıklandığı üçüncü kişilere bildirilmesini ve verilerin kanuna 
          aykırı olarak işlenmesi sebebiyle zararlarının giderilmesini talep etme hakları bulunmaktadır. İlgili kişi ayrıntıları 
          İlgili Kişi başvuru Formu’nda belirtildiği üzere başvuru ve şikayet haklarını kullanabilir. Başvuru: İlgili kişilerin, 
          sahip oldukları hakları kullanabilmeleri için öncelikle veri sorumlusuna başvurmaları zorunludur. Bu yol tüketilmeden 
          Kurula şikâyet yoluna gidilemez. Şikayet: İlgili kişinin şikayet yoluna başvurulabilmesi için Şirkete başvurunun reddedilmesi, 
          verilen cevabın yetersiz bulunması veya 30 gün içinde başvuruya cevap verilmemiş olması gereklidir. İlgili kişilerin 
          Şirkete başvurmadan doğrudan Kurula şikayet yoluna gitmesi mümkün değildir. 17. Kurul Kararlarının Yerine Getirilmesi 
          Yükümlülüğü Kurul, şikâyet üzerine veya ihlal iddiasını öğrenmesi durumunda resen görev alanına giren konularda yapacağı 
          inceleme sonucunda bir ihlalin varlığını tespit ederse, hukuka aykırılıkların Şirket tarafından giderilmesine karar 
          vererek, kararı ilgililere tebliğ eder. Kurul Kararlarının Yerine Getirilmesi prosedüründe ayrıntılı olarak belirtildiği 
          üzere Şirket, bu kararı, tebliğ tarihinden itibaren gecikmeksizin ve en geç otuz gün içinde yerine getirir. 18. Veri 
          Sorumluları Sicili (VERBİS) Kayıt Yükümlülüğü Şirket, Veri sorumlularının kayıt olmak zorunda oldukları ve veri işleme 
          faaliyetleri ile ilgili bilgileri beyan ettikleri kayıt sistemine Veri Sorumluları Sicili (VERBİS) kayıt prosedüründe 
          belirtildiği şekilde kayıt olur ve bu kayıtları günceller. 19. Kişisel Veri İhlali İşlenen kişisel verilerin kanuni 
          olmayan yollarla başkaları tarafından elde edilmesi hâlinde, Şirket bu durumu en kısa sürede Kişisel Veri İhlali Prosedüründe 
          belirtildiği şekilde ilgilisine ve Kurula bildirir. Kurul, gerekmesi hâlinde bu durumu, kendi internet sitesinde ya da 
          uygun göreceği başka bir yöntemle ilan edebilir. 20. Kişisel Veri Güvenliği Tedbirleri Şirket Kişisel verilerin hukuka 
          aykırı olarak işlenmesini önlemek, Kişisel verilere hukuka aykırı olarak erişilmesini önlemek, Kişisel verilerin muhafazasını 
          sağlamak için aşağıdaki teknik ve idari tedbirleri Şirket yapısına uygun düzeyde almaktadır. <br>
          • Ağ güvenliği ve uygulama güvenliği sağlanmaktadır. <br>
          • Ağ yoluyla kişisel veri aktarımlarında kapalı sistem ağ kullanılmaktadır. <br>
          • Çalışanlar için veri güvenliği hükümleri içeren disiplin düzenlemeleri mevcuttur. <br>
          • Çalışanlar için veri güvenliği konusunda belli aralıklarla eğitim ve farkındalık çalışmaları yapılmaktadır. <br>
          • Çalışanlar için yetki matrisi oluşturulmuştur. <br>
          • Erişim, bilgi güvenliği, kullanım, saklama ve imha konularında kurumsal politikalar hazırlanmış ve uygulamaya başlanmıştır. <br>
          • Gizlilik taahhütnameleri yapılmaktadır. <br>
          • Görev değişikliği olan ya da işten ayrılan çalışanların bu alandaki yetkileri kaldırılmaktadır. <br>
          • Güncel anti-virüs sistemleri kullanılmaktadır. <br>
          • Güvenlik duvarları kullanılmaktadır. <br>
          • İmzalanan sözleşmeler veri güvenliği hükümleri içermektedir. <br>
          • Kişisel veri güvenliği politika ve prosedürleri belirlenmiştir. <br>
          • Kişisel veri içeren fiziksel ortamlara giriş çıkışlarla ilgili gerekli güvenlik önlemleri alınmaktadır. <br>
          • Kişisel veri içeren fiziksel ortamların dış risklere (yangın, sel vb.) karşı güvenliği sağlanmaktadır. <br>
          • Kişisel veri içeren ortamların güvenliği sağlanmaktadır. <br>
          • Kişisel veriler yedeklenmekte ve yedeklenen kişisel verilerin güvenliği de sağlanmaktadır. <br>
          • Kullanıcı hesap yönetimi ve yetki kontrol sistemi uygulanmakta olup bunların takibi de yapılmaktadır. <br>
          • Mevcut risk ve tehditler belirlenmiştir. <br>
          • Özel nitelikli kişisel veri güvenliğine yönelik protokol ve prosedürler belirlenmiş ve uygulanmaktadır. <br>
          • Özel nitelikli kişisel veriler elektronik posta yoluyla gönderilecekse mutlaka şifreli olarak ve KEP veya kurumsal posta hesabı kullanılarak gönderilmektedir. <br>
          • Şifreleme yapılmaktadır. <br>
          • Veri işleyen hizmet sağlayıcılarının veri güvenliği konusunda belli aralıklarla denetimi sağlanmaktadır. <br>
          • Veri işleyen hizmet sağlayıcılarının, veri güvenliği konusunda farkındalığı sağlanmaktadır. <br>

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