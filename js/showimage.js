
// Mostra il popup con l'immagine del certificato,
// Accetta come parametro l'url dell'immagine

function show_image(imgurl) {
  //alert(imgurl);
  var popup = document.getElementById('popupcontainer');
  popup.style.visibility = "visible";
  var popup = document.getElementById('popupbox');
  popup.style.visibility = "visible";
  var img = document.getElementById('popupimg');
  img.src = imgurl;
  //popup.style.margin = "0 auto";
}

function popup_image_close() {
  var popup = document.getElementById('popupcontainer');
  popup.style.visibility = "hidden";
  var popup = document.getElementById('popupbox');
  popup.style.visibility = "hidden";
}
