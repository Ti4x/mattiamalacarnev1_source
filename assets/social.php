<?php

// Funzioni che includono i vari social!

function social_github() {
  print('
  <div class="github-card" data-github="Ti4x" data-width="400" data-height="" data-theme="medium"></div>
<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>');

echo "<br><br>";
}


function social_instagram() {
  print('
  <!-- InstaWidget -->
<a href="https://instawidget.net/v/user/mattiamalacarne_" id="link-24ab9859a05ba564079ca8aefa8b7cb47e18e54e7b6a76552d602f8a92895c83">@mattiamalacarne_</a>
<script src="https://instawidget.net/js/instawidget.js?u=24ab9859a05ba564079ca8aefa8b7cb47e18e54e7b6a76552d602f8a92895c83&width=300px"></script>
  ');
}

function social_telegram() {
  print('
  <script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="https://telegram.im/widget-button/index.php?id=@malacarne_mattia";document.getElementsByTagName("head")[0].appendChild(script);})();</script>
<a href="https://telegram.im/@malacarne_mattia" target="_blank" class="telegramim_button telegramim_shadow" style="font-size:16px;width:195px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#FFFFFF;border-radius:100px;" title="Mattia"><i></i> Mattia Malacarne</a>

  ');
}

function social_youtube() {
  print('
  <script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UCuQ5ZScT1VRAGWwkk02ah3Q" data-layout="default" data-count="default"></div>
');
}
?>
