<?php
  include("cn.php");

  $so = $_POST['so'];
  $nav = $_POST['navegador'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $fecha = date("d/m/Y");

  // Conectando, seleccionando la base de datos
  $link = mysqli_connect($host, $user, $pw) or trigger_error($link->error);
  $link->select_db("Contador") or trigger_error($link->error);

  $link->query("INSERT INTO $tabla (navegador, ip, so, fecha) VALUES ('$nav', '$ip', '$so', '$fecha')") or trigger_error($link->error);

?>
