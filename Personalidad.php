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
	<title>Mini</title>
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
	<h3>En el siguiente apartado deberás responder en una escala del 1 al 9, donde el 1 es nada y el 9 es mucho, ¿qué tanto los siguientes adjetivos describen tu personalidad? </h3>
	<br>
	<center><section>
	<form name="MiniMarker" action="Burnout.php" method="post">

		<table id="adjetivos" border="1">
			<thead>
				<tr>
					<td colspan="2"><center><h3>¿Qué tanto eres...?</h3></center></td>
					<td></td>
					<td colspan="2"><center><h3>¿Qué tanto eres...?</h3></center></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><label for="P1">Celoso(a)</label></td>
					<td><input type="radio" name="P1" value="1" required><label>1</label>
					<input type="radio" name="P1" value="2"><label>2</label>
					<input type="radio" name="P1" value="3"><label>3</label>
					<input type="radio" name="P1" value="4"><label>4</label>
					<input type="radio" name="P1" value="5"><label>5</label>
					<input type="radio" name="P1" value="6"><label>6</label>
					<input type="radio" name="P1" value="7"><label>7</label>
					<input type="radio" name="P1" value="8"><label>8</label>
					<input type="radio" name="P1" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P13">Intrépido(a)</label></td>
					<td><input type="radio" name="P13" value="1" required><label>1</label>
					<input type="radio" name="P13" value="2"><label>2</label>
					<input type="radio" name="P13" value="3"><label>3</label>
					<input type="radio" name="P13" value="4"><label>4</label>
					<input type="radio" name="P13" value="5"><label>5</label>
					<input type="radio" name="P13" value="6"><label>6</label>
					<input type="radio" name="P13" value="7"><label>7</label>
					<input type="radio" name="P13" value="8"><label>8</label>
					<input type="radio" name="P13" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P2">Cohibido(a)</label></td>
					<td><input type="radio" name="P13" value="9" required><label>1</label>
					<input type="radio" name="P2" value="8"><label>2</label>
					<input type="radio" name="P2" value="7"><label>3</label>
					<input type="radio" name="P2" value="6"><label>4</label>
					<input type="radio" name="P2" value="5"><label>5</label>
					<input type="radio" name="P2" value="4"><label>6</label>
					<input type="radio" name="P2" value="3"><label>7</label>
					<input type="radio" name="P2" value="2"><label>8</label>
					<input type="radio" name="P2" value="1"><label>9</label></td>
					<td></td>
					<td><label for="P14">Introvertido(a)</label></td>
					<td><input type="radio" name="P14" value="9" required><label>1</label>
					<input type="radio" name="P14" value="8"><label>2</label>
					<input type="radio" name="P14" value="7"><label>3</label>
					<input type="radio" name="P14" value="6"><label>4</label>
					<input type="radio" name="P14" value="5"><label>5</label>
					<input type="radio" name="P14" value="4"><label>6</label>
					<input type="radio" name="P14" value="3"><label>7</label>
					<input type="radio" name="P14" value="2"><label>8</label>
					<input type="radio" name="P14" value="1"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P3">De humor cambiante</label></td>
					<td><input type="radio" name="P3" value="1" required><label>1</label>
					<input type="radio" name="P3" value="2"><label>2</label>
					<input type="radio" name="P3" value="3"><label>3</label>
					<input type="radio" name="P3" value="4"><label>4</label>
					<input type="radio" name="P3" value="5"><label>5</label>
					<input type="radio" name="P3" value="6"><label>6</label>
					<input type="radio" name="P3" value="7"><label>7</label>
					<input type="radio" name="P3" value="8"><label>8</label>
					<input type="radio" name="P3" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P15">Organizado(a)</label></td>
					<td><input type="radio" name="P15" value="1" required><label>1</label>
					<input type="radio" name="P15" value="2"><label>2</label>
					<input type="radio" name="P15" value="3"><label>3</label>
					<input type="radio" name="P15" value="4"><label>4</label>
					<input type="radio" name="P15" value="5"><label>5</label>
					<input type="radio" name="P15" value="6"><label>6</label>
					<input type="radio" name="P15" value="7"><label>7</label>
					<input type="radio" name="P15" value="8"><label>8</label>
					<input type="radio" name="P15" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P4">Desaliñado(a)</label></td>
					<td><input type="radio" name="P4" value="1" required><label>1</label>
					<input type="radio" name="P4" value="2"><label>2</label>
					<input type="radio" name="P4" value="3"><label>3</label>
					<input type="radio" name="P4" value="4"><label>4</label>
					<input type="radio" name="P4" value="5"><label>5</label>
					<input type="radio" name="P4" value="6"><label>6</label>
					<input type="radio" name="P4" value="7"><label>7</label>
					<input type="radio" name="P4" value="8"><label>8</label>
					<input type="radio" name="P4" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P16">Platicador(a), parlanchín(a)</label></td>
					<td><input type="radio" name="P16" value="1" required><label>1</label>
					<input type="radio" name="P16" value="2"><label>2</label>
					<input type="radio" name="P16" value="3"><label>3</label>
					<input type="radio" name="P16" value="4"><label>4</label>
					<input type="radio" name="P16" value="5"><label>5</label>
					<input type="radio" name="P16" value="6"><label>6</label>
					<input type="radio" name="P16" value="7"><label>7</label>
					<input type="radio" name="P16" value="8"><label>8</label>
					<input type="radio" name="P16" value="9"><label>9</label></td>
				</tr>


				<tr>
					<td><label for="P5">Descuidado(a)</label></td>
					<td><input type="radio" name="P5" value="1" required><label>1</label>
					<input type="radio" name="P5" value="2"><label>2</label>
					<input type="radio" name="P5" value="3"><label>3</label>
					<input type="radio" name="P5" value="4"><label>4</label>
					<input type="radio" name="P5" value="5"><label>5</label>
					<input type="radio" name="P5" value="6"><label>6</label>
					<input type="radio" name="P5" value="7"><label>7</label>
					<input type="radio" name="P5" value="8"><label>8</label>
					<input type="radio" name="P5" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P17">Práctico(a)</label></td>
					<td><input type="radio" name="P17" value="1" required><label>1</label>
					<input type="radio" name="P17" value="2"><label>2</label>
					<input type="radio" name="P17" value="3"><label>3</label>
					<input type="radio" name="P17" value="4"><label>4</label>
					<input type="radio" name="P17" value="5"><label>5</label>
					<input type="radio" name="P17" value="6"><label>6</label>
					<input type="radio" name="P17" value="7"><label>7</label>
					<input type="radio" name="P17" value="8"><label>8</label>
					<input type="radio" name="P17" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P6">Desorganizado(a)</label></td>
					<td><input type="radio" name="P6" value="1" required><label>1</label>
					<input type="radio" name="P6" value="2"><label>2</label>
					<input type="radio" name="P6" value="3"><label>3</label>
					<input type="radio" name="P6" value="4"><label>4</label>
					<input type="radio" name="P6" value="5"><label>5</label>
					<input type="radio" name="P6" value="6"><label>6</label>
					<input type="radio" name="P6" value="7"><label>7</label>
					<input type="radio" name="P6" value="8"><label>8</label>
					<input type="radio" name="P6" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P18">Quisquilloso(a)</label></td>
					<td><input type="radio" name="P18" value="1" required><label>1</label>
					<input type="radio" name="P18" value="2"><label>2</label>
					<input type="radio" name="P18" value="3"><label>3</label>
					<input type="radio" name="P18" value="4"><label>4</label>
					<input type="radio" name="P18" value="5"><label>5</label>
					<input type="radio" name="P18" value="6"><label>6</label>
					<input type="radio" name="P18" value="7"><label>7</label>
					<input type="radio" name="P18" value="8"><label>8</label>
					<input type="radio" name="P18" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P7">Eficente</label></td>
					<td><input type="radio" name="P7" value="1" required><label>1</label>
					<input type="radio" name="P7" value="2"><label>2</label>
					<input type="radio" name="P7" value="3"><label>3</label>
					<input type="radio" name="P7" value="4"><label>4</label>
					<input type="radio" name="P7" value="5"><label>5</label>
					<input type="radio" name="P7" value="6"><label>6</label>
					<input type="radio" name="P7" value="7"><label>7</label>
					<input type="radio" name="P7" value="8"><label>8</label>
					<input type="radio" name="P7" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P19">Relajado(a), tranquilo(a)</label></td>
					<td><input type="radio" name="P19" value="9" required><label>1</label>
					<input type="radio" name="P19" value="8"><label>2</label>
					<input type="radio" name="P19" value="7"><label>3</label>
					<input type="radio" name="P19" value="6"><label>4</label>
					<input type="radio" name="P19" value="5"><label>5</label>
					<input type="radio" name="P19" value="4"><label>6</label>
					<input type="radio" name="P19" value="3"><label>7</label>
					<input type="radio" name="P19" value="2"><label>8</label>
					<input type="radio" name="P19" value="1"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P8">Enérgico(a)</label></td>
					<td><input type="radio" name="P8" value="1" required><label>1</label>
					<input type="radio" name="P8" value="2"><label>2</label>
					<input type="radio" name="P8" value="3"><label>3</label>
					<input type="radio" name="P8" value="4"><label>4</label>
					<input type="radio" name="P8" value="5"><label>5</label>
					<input type="radio" name="P8" value="6"><label>6</label>
					<input type="radio" name="P8" value="7"><label>7</label>
					<input type="radio" name="P8" value="8"><label>8</label>
					<input type="radio" name="P8" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P20">Reservado(a)</label></td>
					<td><input type="radio" name="P20" value="9" required><label>1</label>
					<input type="radio" name="P20" value="8"><label>2</label>
					<input type="radio" name="P20" value="7"><label>3</label>
					<input type="radio" name="P20" value="6"><label>4</label>
					<input type="radio" name="P20" value="5"><label>5</label>
					<input type="radio" name="P20" value="4"><label>6</label>
					<input type="radio" name="P20" value="3"><label>7</label>
					<input type="radio" name="P20" value="2"><label>8</label>
					<input type="radio" name="P20" value="1"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P9">Envidioso(a), resentido(a)</label></td>
					<td><input type="radio" name="P9" value="1" required><label>1</label>
					<input type="radio" name="P9" value="2"><label>2</label>
					<input type="radio" name="P9" value="3"><label>3</label>
					<input type="radio" name="P9" value="4"><label>4</label>
					<input type="radio" name="P9" value="5"><label>5</label>
					<input type="radio" name="P9" value="6"><label>6</label>
					<input type="radio" name="P9" value="7"><label>7</label>
					<input type="radio" name="P9" value="8"><label>8</label>
					<input type="radio" name="P9" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P21">Seguro(a) de si mismo(a)</label></td>
					<td><input type="radio" name="P21" value="9" required><label>1</label>
					<input type="radio" name="P21" value="8"><label>2</label>
					<input type="radio" name="P21" value="7"><label>3</label>
					<input type="radio" name="P21" value="6"><label>4</label>
					<input type="radio" name="P21" value="5"><label>5</label>
					<input type="radio" name="P21" value="4"><label>6</label>
					<input type="radio" name="P21" value="3"><label>7</label>
					<input type="radio" name="P21" value="2"><label>8</label>
					<input type="radio" name="P21" value="1"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P10">Extrovertido(a)</label></td>
					<td><input type="radio" name="P10" value="1" required><label>1</label>
					<input type="radio" name="P10" value="2"><label>2</label>
					<input type="radio" name="P10" value="3"><label>3</label>
					<input type="radio" name="P10" value="4"><label>4</label>
					<input type="radio" name="P10" value="5"><label>5</label>
					<input type="radio" name="P10" value="6"><label>6</label>
					<input type="radio" name="P10" value="7"><label>7</label>
					<input type="radio" name="P10" value="8"><label>8</label>
					<input type="radio" name="P10" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P22">Sistemático(a)</label></td>
					<td><input type="radio" name="P22" value="1" required><label>1</label>
					<input type="radio" name="P22" value="2"><label>2</label>
					<input type="radio" name="P22" value="3"><label>3</label>
					<input type="radio" name="P22" value="4"><label>4</label>
					<input type="radio" name="P22" value="5"><label>5</label>
					<input type="radio" name="P22" value="6"><label>6</label>
					<input type="radio" name="P22" value="7"><label>7</label>
					<input type="radio" name="P22" value="8"><label>8</label>
					<input type="radio" name="P22" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P11">Impaciente, inquieto(a)</label></td>
					<td><input type="radio" name="P11" value="1" required><label>1</label>
					<input type="radio" name="P11" value="2"><label>2</label>
					<input type="radio" name="P11" value="3"><label>3</label>
					<input type="radio" name="P11" value="4"><label>4</label>
					<input type="radio" name="P11" value="5"><label>5</label>
					<input type="radio" name="P11" value="6"><label>6</label>
					<input type="radio" name="P11" value="7"><label>7</label>
					<input type="radio" name="P11" value="8"><label>8</label>
					<input type="radio" name="P11" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P23">Temperamental</label></td>
					<td><input type="radio" name="P23" value="1" required><label>1</label>
					<input type="radio" name="P23" value="2"><label>2</label>
					<input type="radio" name="P23" value="3"><label>3</label>
					<input type="radio" name="P23" value="4"><label>4</label>
					<input type="radio" name="P23" value="5"><label>5</label>
					<input type="radio" name="P23" value="6"><label>6</label>
					<input type="radio" name="P23" value="7"><label>7</label>
					<input type="radio" name="P23" value="8"><label>8</label>
					<input type="radio" name="P23" value="9"><label>9</label></td>
				</tr>

				<tr>
					<td><label for="P12">Ineficiente</label></td>
					<td><input type="radio" name="P12" value="1" required><label>1</label>
					<input type="radio" name="P12" value="2"><label>2</label>
					<input type="radio" name="P12" value="3"><label>3</label>
					<input type="radio" name="P12" value="4"><label>4</label>
					<input type="radio" name="P12" value="5"><label>5</label>
					<input type="radio" name="P12" value="6"><label>6</label>
					<input type="radio" name="P12" value="7"><label>7</label>
					<input type="radio" name="P12" value="8"><label>8</label>
					<input type="radio" name="P12" value="9"><label>9</label></td>
					<td></td>
					<td><label for="P24">Tímido(a)</label></td>
					<td><input type="radio" name="P24" value="9" required><label>1</label>
					<input type="radio" name="P24" value="8"><label>2</label>
					<input type="radio" name="P24" value="7"><label>3</label>
					<input type="radio" name="P24" value="6"><label>4</label>
					<input type="radio" name="P24" value="5"><label>5</label>
					<input type="radio" name="P24" value="4"><label>6</label>
					<input type="radio" name="P24" value="3"><label>7</label>
					<input type="radio" name="P24" value="2"><label>8</label>
					<input type="radio" name="P24" value="1"><label>9</label></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<center><input type="submit" name="MiniMarkerCompleto" value="Siguiente"></center>
		<br>
</form>
</section></center>
</body>

<?php
	if(isset($_POST['MiniMarkerCompleto'])){
		$P1= $_POST["P1"];
		$P2= $_POST["P2"];
		$P3= $_POST["P3"];
		$P4= $_POST["P4"];
		$P5= $_POST["P5"];
		$P6= $_POST["P6"];
		$P7= $_POST["P7"];
		$P8= $_POST["P8"];
		$P9= $_POST["P9"];
		$P10= $_POST["P10"];
		$P11= $_POST["P11"];
		$P12= $_POST["P12"];
		$P13= $_POST["P13"];
		$P14= $_POST["P14"];
		$P15= $_POST["P15"];
		$P16= $_POST["P16"];
		$P17= $_POST["P17"];
		$P18= $_POST["P18"];
		$P19= $_POST["P19"];
		$P20= $_POST["P20"];
		$P21= $_POST["P21"];
		$P22= $_POST["P22"];
		$P23= $_POST["P23"];
		$P24= $_POST["P24"];
	

	$insertardatos= "INSERT INTO Personalidad VALUES('$P1',
													'$P2',
													'$P3',
													'$P4',
													'$P5',
													'$P6',
													'$P7',
													'$P8',
													'$P9',
													'$P10',
													'$P11',
													'$P12',
													'$P13',
													'$P14',
													'$P15',
													'$P16',
													'$P17',
													'$P18',
													'$P19',
													'$P20',
													'$P21',
													'$P22',
													'$P23',
													'$P24')";
	$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
		if(!$ejecutarInsertar){
			echo "Error en la linea de SQL";
		}
	}

	$neurotico=[$P1,$P3,$P9,$P11,$P18,$P19,$P21,$P23];
	$pneurotico=array_sum($neurotico);

	$extroversion=[$P2,$P8,$P10,$P13,$P14,$P16,$P20,$P24];
	$pextrovertido=array_sum($extroversion);

	$teson=[$P4,$P5,$P6,$P7,$P12,$P15,$P17,$P22]; 
	$pteson=array_sum($teson);

?>

</html>