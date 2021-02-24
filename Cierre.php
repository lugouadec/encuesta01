<?php
	session_start();

	$servidor="localhost";
	$usuario="burnout";
	$clave="s7h4a2o6";
	$baseDeDatos="burnout";

	$folio = $_SESSION['folio'];
	echo $folio."<br />";

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
											'$G13',
											$folio)";

											echo $insertardatos;
$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
	
if(!$ejecutarInsertar){
		echo "Error en la linea de SQL";
	}
}
//mysqli_close($enlace);

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
						$sql = "SELECT ((c1+c2+c3+c4+c5+c6)/6) prom FROM iac	WHERE consentimiento_folio=$folio;";
						$IAC_Ind = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}
						else{
							mysqli_data_seek ($resultado, 0);
							$extraido= mysqli_fetch_array($resultado);
							// echo "- Folio: ".$extraido['folio']."<br/>";
							// echo "- Fecha: ".$extraido['fecha']."<br/>";
							if(!empty($extraido['prom'])){
								$IAC_Ind = $extraido['prom'];
							}
						}
						
						echo $IAC_Ind."<br/>";

						if($IAC_Ind>=25.0 && $IAC_Ind<=75.0){
							echo "Tu agotamiento Individual es Moderado";
						}elseif($IAC_Ind>75.0){
						echo "Tu agotamiento Individual es alto, se te recomienda acercarte a la autoridad correspondiente";
						}elseif($IAC_Ind<25.0) {
							echo "Tu agotamiento Individual es leve";
						}
					?>
			</tr>
				</td>
				<td>
					<?php
						$sql = "SELECT ((c7+c8+c9+c10+c11+c12+c13)/7) prom FROM iac	WHERE consentimiento_folio=$folio;";
						$IAC_Ind = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
								echo "Lo sentimos, este sitio web está experimentando problemas.";
						}
						else{
							mysqli_data_seek ($resultado, 0);
							$extraido= mysqli_fetch_array($resultado);
							if(!empty($extraido['prom'])){
								$IAC_Ind = $extraido['prom'];
							}
						}
						
						//$consultaIACtra="SELECT $IAC_tra FROM IAC";
						echo $IAC_Ind."<br/>";

						if($IAC_Ind>=25.0 && $IAC_Ind<=75.0){
							echo "Tu agotamiento Trabajo es Moderado";
						}elseif($IAC_Ind>75.0){
						echo "Tu agotamiento Trabajo es alto, se te recomienda acercarte a la autoridad correspondiente";
						}elseif($IAC_Ind<25.0) {
							echo "Tu agotamiento Trabajo es leve";
						}
					?>
				</td>
			<tr>
				<td>
					<?php
						$sql = "SELECT ((c14+c15+c16+c17+c18+c19)/6) prom FROM iac	WHERE consentimiento_folio=$folio;";
						$IAC_Ind = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}

						else{
								mysqli_data_seek ($resultado, 0);
								$extraido= mysqli_fetch_array($resultado);
								if(!empty($extraido['prom'])){
									$IAC_Ind = $extraido['prom'];
								}
							}

						
						echo $IAC_Ind."<br/>";
						if($IAC_Ind>=25.0 && $IAC_Ind<=75.0){
							echo "Tu agotamiento Atencion es Moderado";
						}elseif($IAC_Ind>75.0){
							echo "Tu agotamiento Atencion es alto, se te recomienda acercarte a la autoridad correspondiente";
						}elseif($IAC_Ind<25.0) {
							echo "Tu agotamiento Atencion es leve";
						}


						// $consultaIACaten="SELECT $IAC_aten FROM IAC";
						// if($IAC_aten<25.0){
						// echo "Tu agotamiento en atencion es leve";
						// }
						// if($IAC_aten>75.0){
						// echo "Tu agotamiento en atencion es alto, se te recomienda acercarte a la autoridad correspondiente";
						// } else {
						// 	echo "Tu agotamiento en atencion es moderado";
						// }
					?>
				</td>
			</tr>
				<td>
					<?php
						$sql = "SELECT ((e1+e2+e3+e4+e5+e6+e7+e8+e9)/9) prom FROM gwestres	WHERE consentimiento_folio=$folio;";
						$Final_estres = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}

						else{
								mysqli_data_seek ($resultado, 0);
								$extraido= mysqli_fetch_array($resultado);
								if(!empty($extraido['prom'])){
									$Final_estres = $extraido['prom'];
								}
							}

						
						echo $Final_estres."<br/>";
						if($Final_estres>=25.0 && $Final_estres<=74.90){
							echo "Estres Laboral es Moderado";
						}elseif($Final_estres>75.0){
							echo "Estres Laboral es alto, se te recomienda acercarte a la autoridad correspondiente";
						}elseif($Final_estres<25.0) {
							echo "Estres Laboral es leve";
						}
											
						// $consultaEstres="SELECT $Final_estres FROM GWEstres";
						// if($Final_estres<25.0){
						// echo "Tu estres en estres laboral es leve";
						// }
						// if($Final_estres>75.0){
						// echo "Tu agotamiento estres laboral es alto, se te recomienda acercarte a la autoridad correspondiente";
						// } else {
						// 	echo "Tu agotamiento estres laboral es moderado";
						// }
					?>
				</td>
			<tr>
				<td>
					<?php
						$sql = "SELECT (p1+p3+p9+p11+p18+p19+p21+p23) suma FROM personalidad WHERE consentimiento_folio=$folio;";
						$Final_Pneurotico = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}

						else{
								mysqli_data_seek ($resultado, 0);
								$extraido= mysqli_fetch_array($resultado);
								if(!empty($extraido['suma'])){
									$Final_Pneurotico = $extraido['suma'];
								}
							}

						
						echo $Final_Pneurotico."<br/>";
						if($Final_Pneurotico>=8.0 && $Final_Pneurotico<=29){
							echo "Personalidad Neurotica Baja";
						}elseif($Final_Pneurotico>=30  && $Final_Pneurotico <= 50){
							echo "Personalidad Neurotica Promedio";
						}elseif($Final_Pneurotico>50) {
							echo "Personalidad Neurotica Alta";
						}

						echo "<br />";

						$sql = "SELECT (p2+p8+p10+p13+p14+p16+p20+p24) suma FROM personalidad WHERE consentimiento_folio=$folio;";
						$Final_Pneurotico = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}

						else{
								mysqli_data_seek ($resultado, 0);
								$extraido= mysqli_fetch_array($resultado);
								if(!empty($extraido['suma'])){
									$Final_Pneurotico = $extraido['suma'];
								}
							}

						
						echo $Final_Pneurotico."<br/>";
						if($Final_Pneurotico>=8.0 && $Final_Pneurotico<=29){
							echo "Personalidad Neurotica Baja";
						}elseif($Final_Pneurotico>=30  && $Final_Pneurotico <= 50){
							echo "Personalidad Neurotica Promedio";
						}elseif($Final_Pneurotico>50) {
							echo "Personalidad Neurotica Alta";
						}
						
						echo "<br />";

						$sql = "SELECT (p4+p5+p6+p7+p12+p15+p17+p22) suma FROM personalidad WHERE consentimiento_folio=$folio;";
						$Final_Pneurotico = 0; 
						$resultado = mysqli_query($enlace,$sql);
						if (!$resultado) {
							// ¡Oh, no! La consulta falló. 
							echo "Lo sentimos, este sitio web está experimentando problemas.";
						}

						else{
								mysqli_data_seek ($resultado, 0);
								$extraido= mysqli_fetch_array($resultado);
								if(!empty($extraido['suma'])){
									$Final_Pneurotico = $extraido['suma'];
								}
							}

						
						echo $Final_Pneurotico."<br/>";
						if($Final_Pneurotico>=8.0 && $Final_Pneurotico<=29){
							echo "Personalidad Neurotica Baja";
						}elseif($Final_Pneurotico>=30  && $Final_Pneurotico <= 50){
							echo "Personalidad Neurotica Promedio";
						}elseif($Final_Pneurotico>50) {
							echo "Personalidad Neurotica Alta";
						}
						// $consultaExigencia="SELECT $Final_exigencia FROM exigencia";
						// if($Final_exigencia<25.0){
						// echo "Tu estres en estres laboral es leve";
						// }
						// if($Final_exigencia>75.0){
						// echo "Tu estres laboral es alto, se te recomienda acercarte a la autoridad correspondiente";
						// } else {
						// 	echo "Tu agotamiento estres laboral es moderado";
						// }
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
<?php
	mysqli_close($enlace);
?>
</body>
</html>