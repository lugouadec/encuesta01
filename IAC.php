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
	<title>IAC</title>
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
		<h2>Unidad de Educación, Investigación y Políticas de Salud</h2></center>
		<hr>
	</div>
</header>
<body>
	<h3>Instrucciones: a continuación se encuentran preguntas relativas a la frecuencia o el grado en que las personas pueden sentirse agotadas (“desgastadas”) en diferentes situaciones. Para cada pregunta existen cinco opciones de respuesta. Por favor, lee detenidamente cada pregunta y selecciona la opción que consideres que se aplica a tu persona, marcando el número correspondiente.</h3>
	<br>
	<br>
	
	<center><section>
		<form name="IAC" action="Stress.php" method="post">
			<table id="iac_1al5" border="1" class="center">
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
						<td><label for="C1">...te has sentido cansado(a)?</label></td>
						<td><center><input type="radio" name="C1" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C1" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C1" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C1" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C1" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C2">...te has sentido fisicamente extenuado(a)?</label></td>
						<td><center><input type="radio" name="C2" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C2" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C2" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C2" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C2" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C3">...te has sentido emocionalmente extenuado(a)?</label></td>
						<td><center><input type="radio" name="C3" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C3" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C3" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C3" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C3" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C4">...has pensado "ya no puedo más"?</label></td>
						<td><center><input type="radio" name="C4" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C4" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C4" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C4" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C4" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C5">...te has sentido extremadamente desgastado(a)?</label></td>
						<td><center><input type="radio" name="C5" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C5" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C5" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C5" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C5" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<br>

			<table id="iac_6al10" border="1" class="center">
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
						<td><label for="C6">...has pensado "ya no puedo más"?</label></td>
						<td><center><input type="radio" name="C6" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C6" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C6" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C6" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C6" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C7">...al salir el hospital o clínica, te has sentido extremadamente desgastado(a)?</label></td>
						<td><center><input type="radio" name="C7" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C7" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C7" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C7" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C7" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C8">...por las mañanas, te ha abatido el pensamiento "otro día de trabajo en el hospital o clínica"?</label></td>
						<td><center><input type="radio" name="C8" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C8" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C8" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C8" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C8" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C9">...te ha parecido pesada cada hora que transcurre en el trabajo del hospital o clínica?</label></td>
						<td><center><input type="radio" name="C9" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C9" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C9" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C9" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C9" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C10">...al salir el hospital o clínica, te has sentido con suficiente energía para estar con la familia o amigos?</label></td>
						<td><center><input type="radio" name="C10" value="100" required><label>0</label></center></td>
						<td><center><input type="radio" name="C10" value="75"><label>1</label></center></td>
						<td><center><input type="radio" name="C10" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C10" value="25"><label>3</label></center></td>
						<td><center><input type="radio" name="C10" value="0"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
		<br>
		<br>
		<br>


			<table id="iac_11al15" border="1" class="center">
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
						<td><label for="C11">...has sentido que el trabajo del hospital o clínica es emocionalmente extenuante?</label></td>
						<td><center><input type="radio" name="C11" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C11" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C11" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C11" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C11" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C12">...has sentido frustración por el trabajo del hospital o clínica?</label></td>
						<td><center><input type="radio" name="C12" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C12" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C12" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C12" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C12" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C13">...has sentido que el trabajo del hospital o clínica es extremadamente desgastante?</label></td>
						<td><center><input type="radio" name="C13" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C13" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C13" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C13" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C13" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C14">...te ha sido difícil lidiar con pacientes?</label></td>
						<td><center><input type="radio" name="C14" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C14" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C14" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C14" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C14" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C15">...has sentido que los pacientes consumen tu energía?</label></td>
						<td><center><input type="radio" name="C15" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C15" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C15" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C15" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C15" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<br>
			<table id="iac_16al19" border="1" class="center">
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
						<td><label for="C16">...te ha dado frustración el trabajo con pacientes?</label></td>
						<td><center><input type="radio" name="C16" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C16" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C16" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C16" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C16" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C17">...has tenido la sensación de dar más de lo que recibes de los pacientes?</label></td>
						<td><center><input type="radio" name="C17" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C17" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C17" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C17" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C17" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C18">...te ha cansado trabajar con pacientes?</label></td>
						<td><center><input type="radio" name="C18" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C18" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C18" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C18" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C18" value="100"><label>4</label></center></td>
					</tr>
					<tr>
						<td><label for="C19">...te has cuestionado cuánto tiempo más serás capaz de seguir tolerando a los pacientes?</label></td>
						<td><center><input type="radio" name="C19" value="0" required><label>0</label></center></td>
						<td><center><input type="radio" name="C19" value="25"><label>1</label></center></td>
						<td><center><input type="radio" name="C19" value="50"><label>2</label></center></td>
						<td><center><input type="radio" name="C19" value="75"><label>3</label></center></td>
						<td><center><input type="radio" name="C19" value="100"><label>4</label></center></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>			
			<center><input type="submit" name="IAC_completo" value="Completo"></center>
			<br>
			<br>
			<button id="" value="Siguiente">Siguiente</button>
		</form>
	</section></center>

</body>

<?php
	if(isset($_POST['IAC_completo'])){
		$C1= $_POST["C1"];
		$C2= $_POST["C2"];
		$C3= $_POST["C3"];
		$C4= $_POST["C4"];
		$C5= $_POST["C5"];
		$C6= $_POST["C6"];
		$C7= $_POST["C7"];
		$C8= $_POST["C8"];
		$C9= $_POST["C9"];
		$C10= $_POST["C10"];
		$C11= $_POST["C11"];
		$C12= $_POST["C12"];
		$C13= $_POST["C13"];
		$C14= $_POST["C14"];
		$C15= $_POST["C15"];
		$C16= $_POST["C16"];
		$C17= $_POST["C17"];
		$C18= $_POST["C18"];
		$C19= $_POST["C19"];

	

	$insertardatos= "INSERT INTO IAC VALUES('$C1',
											'$C2',
											'$C3',
											'$C4',
											'$C5',
											'$C6',
											'$C7',
											'$C8',
											'$C9',
											'$C10',
											'$C11',
											'$C12',
											'$C13',
											'$C14',
											'$C15',
											'$C16',
											'$C17',
											'$C18',
											'$C19')";
	$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
		if(!$ejecutarInsertar){
			echo "Error en la linea de SQL";
		}
	}

	$individual=[$C1,$C2,$C3,$C4,$C5,$C6];
	$suma_IACind=array_sum($individual);
	$total_ind= count($individual);
	$IAC_Ind=$suma_IACind/$total_ind;


	$trabajo=[$C7,$C8,$C9,$C10,$C11,$C12,$C13];
	$suma_IACtra=array_sum($trabajo);
	$total_tra= count($trabajo);
	$IAC_tra=$suma_IACtra/$total_tra;


	$atencion=[$C14,$C15,$C16,$C17,$C18,$C19];
	$suma_IACaten=array_sum($atencion);
	$total_aten= count($atencion);
	$IAC_aten=$suma_IACaten/$total_aten;



?>

</html>