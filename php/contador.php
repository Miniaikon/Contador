<?php
include("cn.php");

$so = $_POST['so'];
$nav = $_POST['navegador'];
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date("d/m/Y");


// Conectando, seleccionando la base de datos
$link = mysql_connect($host, $user, $pw)or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($db, $link) or die('No se pudo conectar: ' . mysql_error());

mysql_query("INSERT INTO paginacion (navegador, ip, so, fecha)VALUES ('$nav', '$ip', '$so', '$fecha')", $link) or die('No se inserta');

?>