<?php
	$servidor="localhost";
	$usuario="root";
	$clave="s7h4a2o6";
	$baseDeDatos="burnout";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if (!$enlace){
		//echo "Error en la conexión con el servidor". mysql_error();

		die("Conexion fallida"-mysql_error());
	}
	echo "Conexion Exitosa";
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Portada</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<header>
	<div id="logo">
		<br>
		<img src="img/logo.png">		
		<br>
		<br>
	</div>
	<div id="nombres">
		<br>
		<center><h2>Instituto Mexicano del Seguro Social</h2>
		<h2>Unidad de Educación, Investigación y Políticas de Salud</h2>
		<h2>COORDINACIÓN DE INVESTIGACIÓN EN SALUD</h2></center>
		<hr>
	</div>
</header>
<br>
<body>
	<section id="invitacion">
		<br>
		<br>
		<center><h3>Te invita a participar en el estudio "Validez y confiabilidad de una adaptación transcultural del inventario de agotamiento de Copenhague para su uso en médicos residentes mexicanos - Prevalencia y factores de riesgo de agotamiento entre médicos residentes mexicanos"</h3></center>
	</section>

	<section id="participar">
		<form name="participar" action="consentimiento.php" method="POST">
			<center><h1><input type="submit" name="participar" value="Si, quiero participar!"></h1></center>
		</form>
	</section>

</body>
</html>

<?php

	//if(isset($_POST['participar'])){
		$folio=rand(1,20000);
	echo "Holas php";

	$insertardatos= "INSERT INTO participar VALUES('$folio')";
	$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
		if(!$ejecutarInsertar){
			echo "Error en la linea de SQL";
		}
	//}
echo "Fin PHP";
?>