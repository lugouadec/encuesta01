<?php
/*	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="burnout";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if (!$enlace){
		echo "Error en la conexión con el servidor";
	}*/
	echo "Hola Como";
?>

<!DOCTYPE html>
<html>
<head>
	<title>BO</title>
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
		<center><h2>Instituto Mexicano del Seguro Social</h2>
		<h2>Unidad de Educación, Investigación y Políticas de Salud</h2>
		<hr>
		</div>
</header>
<body>
		<h3>Intrucciones: responde a las siguientes afirmaciones. Para cada pregunta existen cinco opciones de respuesta. Por favor, lee detenidamente cada pregunta y selecciona la opción que consideres que se aplica a tu persona, marcando el número correspondiente.</h3>
		<br>
		<br>	
	<center><section>
	<form name="burnout" action="Exigencia.php" method="post">
		<table id="burnouttable1" border="1">
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
					<td><label for="O1">...te has sentido cansado(a) desde antes de llegar al hospital o clínica?</label></td>
					<td><center><input type="radio" name="O1" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O1" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O1" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O1" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O1" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O2">...has necesitado más tiempo para relajarte y desconectarte del trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O2" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O2" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O2" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O2" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O2" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O3">...has sentido que manejas bien la presión de tu trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O3" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O3" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O3" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O3" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O3" value="0"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O4">...te has sentido emocionalmente desgastado (a) por el trabajo?</label></td>
					<td><center><input type="radio" name="O4" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O4" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O4" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O4" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O4" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O5">...después de salir del hospital o clínica, te has sentido con suficiente energía para actividades de recreación?</label></td>
					<td><center><input type="radio" name="O5" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O5" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O5" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O5" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O5" value="0"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O6">...después de salir del hospital o clínica, te has sentido totalmente agotado(a)?</label></td>
					<td><center><input type="radio" name="O6" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O6" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O6" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O6" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O6" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O7">...has sentido que toleras bien la cantidad de trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O7" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O7" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O7" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O7" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O7" value="0"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O8">...te has sentido con energía para trabajar en el hospital o clínica?</label></td>
					<td><center><input type="radio" name="O8" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O8" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O8" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O8" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O8" value="0"><label>4</label></center></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table id="burnouttable2" border="1">
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
					<td><label for="O9">...has procurado buscar aspectos nuevos en tu trabajo?</label></td>
					<td><center><input type="radio" name="O9" value="100" required><label>0</label></center></center></td>
					<td><center><input type="radio" name="O9" value="75"><label>1</label></center></center></td>
					<td><center><input type="radio" name="O9" value="50"><label>2</label></center></center></td>
					<td><center><input type="radio" name="O9" value="25"><label>3</label></center></center></td>
					<td><center><input type="radio" name="O9" value="0"><label>4</label></center></center></td>
				</tr>
				<tr>
					<td><label for="O10">...has tenido más opiniones negativas que positivas sobre tu trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O1O" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O1O" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O1O" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O1O" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O1O" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O11">...has hecho más por inercia tu trabajo en el hospital o clínica?</label></td>
					<td><center><input type="radio" name="O11" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O11" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O11" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O11" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O11" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O12">...el trabajo del hospital o clínica ha representado un reto positivo?</label></td>
					<td><center><input type="radio" name="O12" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O12" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O12" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O12" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O12" value="0"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O13">...te has hecho indiferente al trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O13" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O13" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O13" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O13" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O13" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O14">...has sentido hartazgo por el trabajo del hospital o clínica?</label></td>
					<td><center><input type="radio" name="O14" value="0" required><label>0</label></center></td>
					<td><center><input type="radio" name="O14" value="25"><label>1</label></center></td>
					<td><center><input type="radio" name="O14" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O14" value="75"><label>3</label></center></td>
					<td><center><input type="radio" name="O14" value="100"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O15">...has sentido que estás en el tipo de trabajo que siempre imaginaste?</label></td>
					<td><center><input type="radio" name="O15" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O15" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O15" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O15" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O15" value="0"><label>4</label></center></td>
				</tr>
				<tr>
					<td><label for="O16">...te has sentido comprometido(a) con el trabajo?</label></td>
					<td><center><input type="radio" name="O16" value="100" required><label>0</label></center></td>
					<td><center><input type="radio" name="O16" value="75"><label>1</label></center></td>
					<td><center><input type="radio" name="O16" value="50"><label>2</label></center></td>
					<td><center><input type="radio" name="O16" value="25"><label>3</label></center></td>
					<td><center><input type="radio" name="O16" value="0"><label>4</label></center></td>
				</tr>
			</tbody>
		</table></center>
		<br>
		<br>
			<center><input type="submit" name="BurnoutCompleto" value="Siguiente"></center>
		<br>
		<br>
	</form>
	</section>
</body>

<?php
	if(isset($_POST['BurnoutCompleto'])){
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
	/*
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
*/
?>

</html>