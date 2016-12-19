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

<!DOCTYPE html>
<html>
<head>
	<title>Pagina de ejemplo</title>
	<script src="js/contador.js"></script>
</head>
<body>

	<h1>
    Bienvenidos al sitio
  </h1>
	<h2>
    Su contador aumentará en uno
  </h2>
	<p>
    <b>Usted es la visita numero:</b>
    <?php echo obtenerNumeroVisitas(); ?>
  </p>

</body>
</html>
