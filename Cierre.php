<?php
	$servidor="localhost";
	$usuario="burnout";
	$clave="s7h4a2o6";
	$baseDeDatos="burnout";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if (!$enlace){
		echo "Error en la conexión con el servidor";
	}

if(!empty($_POST['Perfil_completo'])){
		$G6= $_POST["G6"];
		$G7= $_POST["G7"];
		$G8= $_POST["G8"];
		$G9= $_POST["G9"];
		$G10= $_POST["G10"];
		$EPL14_1= $_POST["EPL14_1"];
		$EPL14_2= $_POST["EPL14_2"];
		$EPL13= $_POST["EPL13"];
		$G4= $_POST["G4"];
		$G5= $_POST["G5"];
		$EPL15= $_POST["EPL15"];
		$G1= $_POST["G1"];
		$G2= $_POST["G2"];
		$G3= $_POST["G3"];
		$G11= $_POST["G11"];
		$G12= $_POST["G12"];
		$G13= $_POST["G13"];


$insertardatos= "INSERT INTO confusoras VALUES('$G6',
											'$G7',
											'$G8',
											'$G9',
											'$G10',
											'$EPL14_1',
											'$EPL14_2',
											'$EPL13',
											'$G4',
											'$G5',
											'$EPL15',
											'$G1',
											'$G2',
											'$G3',
											'$G11',
											'$G12',
											'$G13')";

											echo $insertardatos;
$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
	
if(!$ejecutarInsertar){
		echo "Error en la linea de SQL";
	}
}
mysqli_close($enlace);

?>



<html>
<head>
	<title>Agradecimientos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">

</head>
<body>
	<br>
	<br>
	<br>
	<center><section>
		<table id="resultados" border="1">
			<thead>
				<tr>
					<td><h3>Tus resultados fueron los siguientes:</h3></td>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					<?php
						$consultaIACind="SELECT $IAC_Ind FROM IAC";
						if($IAC_Ind<25.0){
						echo "Tu agotamiento Individual es leve";
						}
						if($IAC_Ind>75.0){
						echo "Tu agotamiento Individual es alto, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu agotamiento Trabajo es moderado";
						}
					?>
			</tr>
				</td>
				<td>
					<?php
						$consultaIACtra="SELECT $IAC_tra FROM IAC";
						if($IAC_tra<25.0){
						echo "Tu agotamiento en Trabajo es leve";
						}
						if($IAC_tra>75.0){
						echo "Tu agotamiento Trabajo es alto, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu agotamiento Trabajo es moderado";
						}
					?>
				</td>
			<tr>
				<td>
					<?php
						$consultaIACaten="SELECT $IAC_aten FROM IAC";
						if($IAC_aten<25.0){
						echo "Tu agotamiento en atencion es leve";
						}
						if($IAC_aten>75.0){
						echo "Tu agotamiento en atencion es alto, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu agotamiento en atencion es moderado";
						}
					?>
				</td>
			</tr>
				<td>
					<?php
						$consultaEstres="SELECT $Final_estres FROM GWEstres";
						if($Final_estres<25.0){
						echo "Tu estres en estres laboral es leve";
						}
						if($Final_estres>75.0){
						echo "Tu agotamiento estres laboral es alto, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu agotamiento estres laboral es moderado";
						}
					?>
				</td>
			<tr>
				<td>
					<?php
						$consultaExigencia="SELECT $Final_exigencia FROM exigencia";
						if($Final_exigencia<25.0){
						echo "Tu estres en estres laboral es leve";
						}
						if($Final_exigencia>75.0){
						echo "Tu estres laboral es alto, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu agotamiento estres laboral es moderado";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						$consultaNeurotico="SELECT $pneurotico FROM Personalidad";
						if($pneurotico<=29.0){
						echo "Tu personalidad de tipo neurotico es baja";
						}
						if($pneurotico>=51.0){
						echo "Tu personalidad de tipo neurotico es alta, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu personalidad de tipo neurotico es la promedio";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						$consultaExtro="SELECT $pextrovertido FROM Personalidad";
						if($pextrovertido<=29.0){
						echo "Tu personalidad de tipo extrovertido es baja";
						}
						if($pextrovertido>=51.0){
						echo "Tu personalidad de tipo extrovertido es alta, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu personalidad de tipo extrovertido es la promedio";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						$consultaTeson="SELECT $pteson FROM Personalidad";
						if($pteson<=29.0){
						echo "Tu personalidad de tipo Responsable es baja";
						}
						if($pteson>=51.0){
						echo "Tu personalidad de tipo Responsable es alta, se te recomienda acercarte a la autoridad correspondiente";
						} else {
							echo "Tu personalidad de tipo Responsable es la promedio";
						}
					?>
				</td>
			</tr>
			</tbody>
		</table>
	</section></center>
	<br>
	<br>
	<hr>
	<br>
	<center><h1>¡Gracias por participar!</h1></center>
	<br>
	<br>
	<br>
	<h4>En caso de dudas o aclaraciones sobre sus derechos como participante podrá dirigirse a: Comisión de Ética de Investigación de la CNIC del IMSS: Avenida Cuauhtémoc 330 4° piso Bloque “B” de la Unidad de Congresos, Colonia Doctores. México, D.F., CP 06720. Teléfono (55) 56 27 69 00 extensión 21230, Correo electrónico: comision.etica@imss.gob.mx</h4>
	<br>
	<br>
	<br>
	<br>

</body>
</html>