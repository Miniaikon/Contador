<?php
  include("cn.php");
  $tabla = $_SERVER['HTTP_HOST'];
  $link = mysqli_connect($host, $user, $pw) or trigger_error($link->error);
  $link->select_db("Contador") or trigger_error($link->error);
  $result = $link->query("SELECT * FROM $tabla") or trigger_error($link->error);
  $cont = 0;

  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $cont++;
  }


  mysqli_free_result($result);
  mysqli_close($link);

  echo json_encode($cont);
?>
