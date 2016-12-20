<?php
  function obtenerNumeroVisitas(){
    include("php/cn.php");

    // conexion y ejecucion de consulta
    $link = mysqli_connect($host, $user, $pw) or trigger_error($link->error);
    $link->select_db("Contador") or trigger_error($link->error);

    $result = $link->query("SELECT * FROM $tabla") or trigger_error($link->error);
  	$cont = 0;

  	while($row = $result->fetch_array(MYSQLI_ASSOC)){
      $cont++;
    }

  	// liberar resultados
  	mysqli_free_result($result);

  	// cerrar la conexión
  	mysqli_close($link);
  	echo $cont;
  }
?>
