<?php
  include("php/visitas.php");
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
