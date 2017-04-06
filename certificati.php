<?php include "assets/header.html"; ?>

<title>CERTIFICATI | Mattia Malacarne</title>

<?php include "assets/navbar.html"; ?>

<!-- Popup a scomparsa -->
<!-- Sfondo trasparente -->
<div id = "popupcontainer" name = "popupbox" style = "visibility: hidden;">
</div>
<!-- Contenitore con immagine -->
<div id = "popupbox" style = "visibility: hidden; top:10%;">
  <span class="popupclose" onclick="popup_image_close();">X</span>
  <img id = "popupimg" width = "100%" src = "#">
</div>
<!-- Fine Popup -->

<!-- Contenuto della home -->
<div class = "master-container">
<!-- Intestazione stile persorso -->
<?php include "assets/intestazione.php"; ?>


  <center><p>Siamo seri non ho idea di quello che possano valere questi certificati, e credo non valgano proprio nulla.<br>
             Tuttavia li ho ottenuti quindi perch&egrave; non metterli?</p>
             <br><br>
             <h1>Certificati <b>SoloLearn</b></h1>



             <br><br>
             <h3>Javascript</h3>
             <img style = "cursor: pointer;" src = "img/cert-javascript.jpg" height="200" onclick = "show_image('img/cert-javascript.jpg');">

             <!-- Break di fine pagina -->
             <br><br><br>

             <p>Per maggiori informazioni sui certificati, e per ottenerli anche voi visitate il sito di <a href = "https://www.sololearn.com/" style = "color: #000; text-decoration: none">SoloLearn</a><br>
               Potrete ottenere i certificati facendo semplici corsi, tramite app su Smartphone e tablet o direttamente dal vostro pc.<br>
               <b>BUON LAVORO!</b></p>
               <br><br>
           </center>
</div>

<?php include "assets/footer.html"; ?>
