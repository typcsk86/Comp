let suggestions = [];
let links = [];
var x, xmlhttp, xmlDoc;
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "../../../xmlFiles/search.xml", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML;
x = xmlDoc.getElementsByTagName("URUNVEKATEGORI");
for(i=0; i<x.length; i++) {
    suggestions[i] = x[i].getElementsByTagName("BASLIK")[0].childNodes[0].nodeValue;
    links[i] = x[i].getElementsByTagName("LINKURUN")[0].childNodes[0].nodeValue;
}