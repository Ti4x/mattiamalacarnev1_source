
<?php

$arrayComandi = array(
  "sudo apt-get install",
  "sudo apt-get update",
  "sudo apt-get upgrade",
  "echo 'ciao mondo'",
  "sudo su",
  "telnet hostname port",
  "pwd",
  "cd /Desktop",
  "cp -r Scaricati/Film /home/user/Video",
  "mkdir Scrivania/documenti",
  "chown user:vips soldi.txt",
  "sudo chmod 755 filesegreto",
  "cat file1 file2> file3",
  "more file1",
  "ls -l | more",
  "uname -a",
  "sudo lshw -short",
  "ping www.google.com",
  "vncviewer -viewonly -fullscreen 192.168.100.1:0",
  "sudo mkisofs -r -o iso_da_masterizzare.iso",

);

$rand = rand(0, count($arrayComandi) - 1);

?>


user@mattiamalacarne.tk:~$ <?php echo "$arrayComandi[$rand]";?>
<br><br>
