<?php
	$servidor="localhost";
	$usuario="root";
	$clave="s7h4a2o6";
	$baseDeDatos="burnout";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if (!$enlace){
		echo "Error en la conexión con el servidor";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laboral</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">

</head>
	<header>
		<div id="logo">
		<img src="img/logo.png">
		<br>
		<br>
		</div>
		<div id="nombres">
		<br>
		<center><h2>Instituto Mexicano del Seguro Social</h2>
		<h2>Unidad de Educación, Investigación y Políticas de Salud</h2>
		<hr>
		</div>
	</header>
	<body>
		<div>
			<h3>Contesta las siguientes afirmaciones. Para cada pregunta existen cinco opciones de respuesta. Por favor, lee detenidamente cada pregunta y selecciona la opción que consideres que se aplica a tu persona, marcando el número correspondiente.</h3>
		<br>
		</div>
	<br>
	<center><section>
		<form name="GWStress" action="Personalidad.php" method="post">
			<table id="GWS" border="1">
				<thead>
					<tr>
						<td><center><h3>Últimamente, ¿qué tan seguido...</h3></center></td>
						<td><center><h4>Nunca</h4></center></td>
						<td><center><h4>Solo algunas veces</h4></center></td>
						<td><center><h4>Algunas veces</h4></center></td>
						<td><center><h4>Muchas veces</h4></center></td>
						<td><center><h4>Siempre</h4></center></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label for="E1">...el estrés del trabajo del hospital o clínica es tal, que desearías cambiarlo por otro?</label> </td>
						<td><center><input type="radio" name="E1" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E1" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E1" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E1" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E1" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E2">...desde que amanece, has tenido preocupaciones relacionadas con el trabajo?</label></td>
						<td><center><input type="radio" name="E2" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E2" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E2" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E2" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E2" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E3">...has sentido que ya no puedes contrarrestar más el estrés del trabajo?</label></td>
						<td><center><input type="radio" name="E3" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E3" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E3" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E3" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E3" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E4">...te ha costado conciliar el sueño por preocupaciones relacionadas con el trabajo?</label></td>
						<td><center><input type="radio" name="E4" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E4" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E4" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E4" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E4" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E5">...el estrés del trabajo del hospital o clínica te ha hecho olvidar cosas importantes?</label></td>
						<td><center><input type="radio" name="E5" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E5" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E5" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E5" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E5" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E6">...el estrés del trabajo del hospital o clínica es tal, que ha pasado por tu mente renunciar?</label></td>
						<td><center><input type="radio" name="E6" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E6" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E6" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E6" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E6" value="100"><label>4</label></td></center>
					</tr>
					<tr>
						<td><label for="E7">...has pasado demasiado tiempo pensando en preocupaciones relacionadas con el trabajo?</label></td>
						<td><center><input type="radio" name="E7" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E7" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E7" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E7" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E7" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E8">...el estrés del trabajo del hospital o clínica te ha provocado dificultades para concentrarte?</label></td>
						<td><center><input type="radio" name="E8" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E8" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E8" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E8" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E8" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="E9">...el estrés del trabajo del hospital o clínica te ha hecho perder los estribos con facilidad (estallar en ira o enojo)?</label></td>
						<td><center><input type="radio" name="E9" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="E9" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="E9" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="E9" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="E9" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<center><input type="submit" name="Stress_completo" value="Siguiente"></center>
			<br>
		</form>
	</section></center>

</body>

<?php
	if(isset($_POST['Stress_completo'])){
		$E1= $_POST["E1"];
		$E2= $_POST["E2"];
		$E3= $_POST["E3"];
		$E4= $_POST["E4"];
		$E5= $_POST["E5"];
		$E6= $_POST["E6"];
		$E7= $_POST["E7"];
		$E8= $_POST["E8"];
		$E9= $_POST["E9"];
		

	$insertardatos= "INSERT INTO GWEstres VALUES('$E1',
												'$E2',
												'$E3',
												'$E4',
												'$E5',
												'$E6',
												'$E7',
												'$E8',
												'$E9')";
	$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
		if(!$ejecutarInsertar){
			echo "Error en la linea de SQL";
		}
	}

	$estres=[$E1,$E2,$E3,$E4,$E5,$E6,$E7,$E8,$E9];
	$suma_estres=array_sum($estres);
	$total_estres= count($estres);
	$Final_estres=$suma_estres/$total_estres;
?>

</html>