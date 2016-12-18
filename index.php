<?php

  function select(){

    include("php/cn.php");

    $link = mysqli_connect($host, $user, $pw);
    $link->select_db("paginacion");

    $query = "SELECT * FROM paginacion";
    $result = $link->query($query);

  	$cont = 0;

  	while ($row = $result->fetch_array(MYSQL_ASSOC)) {
  	   $cont++;
  	}

  	// liberar resultados
  	mysql_free_result($result);

  	// cerrar la conexión
  	mysql_close($link);
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

	<h1>Bienvenidos al sitio</h1>
	<h2>Su contador aumentará en uno</h2>
	<p><b>Usted es la visita numero:</b> <?php echo select(); ?></p>
</body>
</html>
