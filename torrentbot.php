<?php include "assets/header.html"; ?>

<title>TORRENTBOT | Mattia Malacarne</title>

<?php include "assets/navbar.html"; ?>

<!-- Contenuto della home -->
<div class = "master-container">
<!-- Intestazione stile persorso -->
<?php include "assets/intestazione.php"; ?>
  <center>

    <h1>TORRENTBOT</h1>
    <h4>Ricevi notifiche telegram alla fine di un download Torrent</h4>

  </center>
  <br>
    <div style = "margin-left:25%">
      <b>Occorrente</b><br>
      <ul>
        <li>Linux</li>
        <li>transmission-daemon, transmission-remote-cli</li>
      </ul>

      <span>
        <img style = "top: 7px; margin-right: 5px; position: relative;" src="img/download_icon.png"></span> <a href = "https://github.com/Ti4x/transmission-telegram-notification/blob/master/telegram-notification.sh">SCRIPT TELEGRAM_NOTIFICATION.SH</a>
      </span>
      <br>
      <bR><br>
        <h2>TORRENTBOT V1.0 --</h2>
      <b>Breve guida</b><br>
      <ol>
        <li>Installare transmission-daemon e transmission-remote-cli con sudo <i>apt-get install</i></li>
        <li>Fermare il demone perch&egrave; riscrive la configurazione ogni volta che viene stoppato  (potrebbe richiedere la password) <i>service transmission-daemon stop</i></li>
        <li>Configuriamo Il demone dal suo file di configurazione </i>nano /etc/transmission-daemon/settings.json</i></li>
        <li>Abilitiamo <i>"script-torrent-done-enabled": true,</i> -> in caso fosse settato su "false"</li>
        <li>Diamo il percoso del nostro script <i>"script-torrent-done-filename": "/etc/transmission-daemon/telegram-notification.sh",</i></li>
        <li>Salviamo il file</li>
        <li>Riavviamo il demone <i>service transmission-daemon start</i></li>
      </ol>

      <h3>N.B. Lo script necessita i permessi di esecuzione!</h3>
      <p>lo script &egrave; estremamente banale, sfrutta una semplice chiamata <b>curl</b> a una pagina web dedicata al BOT seguendo le api di telegram, nulla di che!<br>
      <p>&egrave; ancora in fase di sviluppo , appena avr&ograve; tempo lo render&ograve; pubblico cos&igrave; potr&agrave; essere usato da tutti senza il bisogno di creare un vostro BOT,<br>
         cosa che potrebbe risultare fastidiosa in certi casi.</p>

        <h3>ATTENZIONE!</h3>
        <p>transmission quando scarica il torrent lo salva sul disco usando l'utente <b>debian-transmission</b>, ci&ograve; va a creare problemi nell'uso del file<bR>
          difatti non essendo proprietario potrete solo leggere il file, non vi sar&agrave; possibile ad esempio eliminarlo, spostarlo ecc.<br>
          per ovviare questo problema io ho optato all'uso ci un <b>crontab</b> tramite l'utente root, qui il comando usato:
          <br><br>
          # m h  dom mon dow   command<br>
00 * * * * chown -R mattia:mattia /home/mattia/Torrent/<br>
30 * * * * chown -R mattia:mattia /home/mattia/Torrent/<bR>
  <br>
  <p><b>Per accedere a crontab come root:</b><br>
    <i>sudo crontab -e</i> -> Per modificare i crontab<br>
    <i>sudo crontab -l</i> -> Per visualizzare i crontab di root
  <br><br><br><br>
    </div>
</div>

<?php include "assets/footer.html"; ?>
