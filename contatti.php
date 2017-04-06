<?php include "assets/social.php"; ?>
<?php include "assets/header.html"; ?>

<title>CONTATTI | Mattia Malacarne</title>

<?php include "assets/navbar.html"; ?>

<!-- Contenuto della home -->
<div class = "master-container">
<!-- Intestazione stile persorso -->
<?php include "assets/intestazione.php"; ?>

  <center>
    <h1>CONTATTI</h1>
    <p>In questa pagina troverai vari modi per contattarmi, per farmi domande o darmi suggerimenti. <br>
    </p>
      <br>
      <p><b>EMAIL: </b><a style = "cursor:pointer" href="mailto:malacarne.mattia97@gmail.com">malacarne.mattia97@gmail.com</a></p>

      <p><b>TWITTER</b></p>
      <a href="https://twitter.com/Ti4x_" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @Ti4x_</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      <br>

      <p><b>TELEGRAM</b></p>
      <?php social_telegram(); ?>

      <p><b>YOUTUBE</b></p>
      <?php social_youtube(); ?>
      <br>

      <br><br>
      <?php social_github(); ?>

  </center>

</div>




<?php include "assets/footer.html"; ?>
