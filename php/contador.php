<?php
  include("cn.php");

  $so = $_POST['so'];
  $nav = $_POST['navegador'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $fecha = date("d/m/Y");
  $sitio = $_SERVER['HTTP_HOST'];

  // Conectando, seleccionando la base de datos
  $link = mysqli_connect($host, $user, $pw) or trigger_error($link->error);
  $link->select_db("Contador") or trigger_error($link->error);
  $link->query("CREATE TABLE IF NOT EXISTS `$sitio` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `navegador` text,
    `ip` text,
    `so` text,
    `fecha` text,
    `hora` text,
    PRIMARY KEY (`id`)
  )") or trigger_error($link->error);


  $link->query("INSERT INTO $sitio (navegador, ip, so, fecha) VALUES ('$nav', '$ip', '$so', '$fecha')") or trigger_error($link->error);

  include('visitas.php')
  ?>
