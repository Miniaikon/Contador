<?php 
include("php/cn.php");
$link = mysql_connect($host, $user, $pw)
    or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db($db, $link) or die('No se pudo conectar: ' . mysql_error());
// Realizar una consulta MySQL
$query = "SELECT * FROM paginacion";
$result = mysql_query($query, $link) or die("Consulta fallida: " . mysql_error());

function select(){
	$query = "SELECT * FROM paginacion";
	$result = mysql_query($query) or die("Consulta fallida: " . mysql_error());
	$cont = 0;
	
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	   
	        $cont++;
	}

	// Liberar resultados
	mysql_free_result($result);

	// Cerrar la conexión
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