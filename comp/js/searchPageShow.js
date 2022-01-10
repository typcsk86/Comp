var search=null;

try {
    var url_string = (window.location.href).toLocaleLowerCase();
    var url = new URL(url_string);
  
    search = url.searchParams.get("q");
} catch {
console.log("Arama kelimesi yok.");
}
  
var x, xmlhttp, xmlDoc, div;
var xLen;
var lastX = new Object();
var lastXLen;

function ajaxSet() {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "xmlFiles/searchTumUrunler.xml", false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;
    x = xmlDoc.getElementsByTagName("URUN");

    if((search == null)) {
        tumUrunGoster();
    } else {
        urunleriIsle();
    }
}

function urunleriIsle() {
    xLen = x.length;

    for(i=0; i<xLen; i++) {
        if(search.includes(x[i].getElementsByTagName("MARKA")[0].childNodes[0].nodeValue)) {
            lastX[i] = x[i];
        }
    }

    lastXLen = Object.keys(lastX).length;

    if(lastXLen == 0) {
        tumUrunGoster();
    } else {
        for(i=0; x<lastXLen; i++) {
            if(lastXLen[i] == undefined) {
                lastXLen[i].remove();
            }
        }

        urunGoster();
    }
}

function urunGoster() {
lastXLen = Object.keys(lastX).length;

console.log(lastX);

console.log(lastXLen);

div = "";
    for(var key in lastX) {
        div += "<div class='col mb-2'>";
        div += "<div class='card h-100 border-info mb-2 mt-2'>";
            div += "<img src='" + lastX[key].getElementsByTagName("IMGLINK")[0].textContent + "' class='card-img-top'>";
            div += "<div class='card-body'>";
            div += "<h6 class='card-title'>";
            div += lastX[key].getElementsByTagName("BASLIK")[0].textContent;
            div += "</h6>";
            div += "<p class='card-text'>";
            div += lastX[key].getElementsByTagName("ACIKLAMA")[0].textContent;
            div += "</p>";
            div += "</div>";
            div += "<div class='card-footer bg-transparent'>";
            div += "<a href='" +
            lastX[key].getElementsByTagName("LINK")[0].textContent + 
            "' class='btn btn-outline-primary btn-block'>Satın Al</a>";
            div += "</div>";
        div += "</div>";
        div +="</div>";
    }

    document.getElementById("urunBolumu1").innerHTML = div;
}

function tumUrunGoster() {
    div = "";
    div += "<div class='col mb-2'>";
    div += "<p><u>Arama kelimenize uygun bir ürün bulunmamaktadır.</u></p>";
    div += "</div>";

    document.getElementById("urunBolumu1").innerHTML = div;
}