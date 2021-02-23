<?php
	$servidor="localhost";
	$usuario="burnout";
	$clave="s7h4a2o6";
	$baseDeDatos="burnout";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if (!$enlace){
		echo "Error en la conexión con el servidor";
	}

	if(!empty($_POST['BurnoutCompleto'])){
						$O1= $_POST["O1"];
						$O2= $_POST["O2"];
						$O3= $_POST["O3"];
						$O4= $_POST["O4"];
						$O5= $_POST["O5"];
						$O6= $_POST["O6"];
						$O7= $_POST["O7"];
						$O8= $_POST["O8"];
						$O9= $_POST["O9"];
						$O10= $_POST["O10"];
						$O11= $_POST["O11"];
						$O12= $_POST["O12"];
						$O13= $_POST["O13"];
						$O14= $_POST["O14"];
						$O15= $_POST["O15"];
						$O16= $_POST["O16"];
	

	$insertardatos= "INSERT INTO burnout VALUES('$O1',
												'$O2',
												'$O3',
												'$O4',
												'$O5',
												'$O6',
												'$O7',
												'$O8',
												'$O9',
												'$O10',
												'$O11',
												'$O12',
												'$O13',
												'$O14',
												'$O15',
												'$O16')";
	
	$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
		if(!$ejecutarInsertar){
			echo "Error en la linea de SQL";
		}
	}

	$agotamiento=[$O1,$O2,$O3,$O4,$O5,$O6,$O7,$O8];
	$suma_agot=array_sum($agotamiento);
	$total_agot= count($agotamiento);
	$Final_agot=$suma_agot/$total_agot;

	$desen=[$O9,$O10,$O10,$O11,$O12,$O13,$O14,$O15,$O16];
	$suma_desen=array_sum($desen);
	$total_desen= count($desen);
	$desentendimiento=$suma_desen/$total_desen;

	mysqli_close($enlace);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ya casi terminas</title>
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
	<h3>Instrucciones: responde a las siguientes afirmaciones. Para cada pregunta existen cinco opciones de respuesta. Por favor, lee detenidamente cada pregunta y selecciona la opción que consideres que se aplica a tu persona, marcando el número correspondiente.</h3>
	<br>
	<br>
	<center><section>
		<form name="exigencia" action="confusoras.php" method="post">
			<table id="exigencia1" border="1">
				<thead>
					<tr>
						<td><h3>Últimamente, ¿qué tan seguido...</h3></td>
						<td><center><h4>Nunca</h4></center></td>
						<td><center><h4>Solo algunas veces</h4></center></td>
						<td><center><h4>Algunas veces</h4></center></td>
						<td><center><h4>Muchas veces</h4></center></td>
						<td><center><h4>Siempre</h4></center></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label for="EPL1">...te han hecho falta más horas de sueño?</label></td>
						<td><center><input type="radio" name="EPL1" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL1" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL1" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL1" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL1" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL2">...has trabajado bajo presión del tiempo ?</label></td>
						<td><center><input type="radio" name="EPL2" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL2" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL2" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL2" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL2" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL3">...el ritmo de tu trabajo ha sido alto?</label></td>
						<td><center><input type="radio" name="EPL3" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL3" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL3" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL3" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL3" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL4">...el trabajo se te ha acumulado porque hay que hacer mucho en poco tiempo?</label></td>
						<td><center><input type="radio" name="EPL4" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL4" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL4" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL4" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL4" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL5">...has pensado que hay tareas que deberían de hacerse de manera distinta a la solicitada?</label></td>
						<td><center><input type="radio" name="EPL5" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL5" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL5" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL5" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL5" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL6">...has sentido que te exigen cosas contradictorias en el trabajo?</label></td>
						<td><center><input type="radio" name="EPL6" value="0" required=><label>0</label></center></td>
						<td><center><input type="radio" name="EPL6" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL6" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL6" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL6" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<table id="exigencia2" border="1">
				<thead>
					<tr>
						<td><h3>Últimamente, ¿qué tan seguido...</h3></td>
						<td><center><h4>Nunca</h4></center></td>
						<td><center><h4>Solo algunas veces</h4></center></td>
						<td><center><h4>Algunas veces</h4></center></td>
						<td><center><h4>Muchas veces</h4></center></td>
						<td><center><h4>Siempre</h4></center></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label for="EPL7">...has estado en contacto directo con dolor o muerte de pacientes NO-COVID?</label></td>
						<td><center><input type="radio" name="EPL7" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL7" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL7" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL7" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL7" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL8">...has estado en contacto directo con dolor o muerte de pacientes COVID?</label></td>
						<td><center><input type="radio" name="EPL8" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL8" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL8" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL8" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL8" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL9">...has confiado en recibir ayuda de algún compañero en caso de estar sobrecargado (a) de trabajo?</label></td>
						<td><center><input type="radio" name="EPL9" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL9" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL9" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL9" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL9" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL10">...has confiado en recibir apoyo de algún compañero para resolver un caso clínico difícil?</label></td>
						<td><center><input type="radio" name="EPL10" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL10" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL10" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL10" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL10" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL11">...has confiado en recibir apoyo de ti jefe inmediato para resolver un caso clínico difícil?</label></td>
						<td><center><input type="radio" name="EPL11" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL11" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL11" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL11" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL11" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="EPL12">...has sentido que tu jefe inmediato resuelve conflictos de forma imparcial?</label></td>
						<td><center><input type="radio" name="EPL12" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="EPL12" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="EPL12" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="EPL12" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="EPL12" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<center><input type="submit" name="EPLCompleto" value="Siguiente"></center>
			<br>
			<br>
		</form>
	</section></center>

</body>
</html>