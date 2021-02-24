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


if(!empty($_POST['EPLCompleto'])){
				$EPL1= $_POST["EPL1"];
				$EPL2= $_POST["EPL2"];
				$EPL3= $_POST["EPL3"];
				$EPL4= $_POST["EPL4"];
				$EPL5= $_POST["EPL5"];
				$EPL6= $_POST["EPL6"];
				$EPL7= $_POST["EPL7"];
				$EPL8= $_POST["EPL8"];
				$EPL9= $_POST["EPL9"];
				$EPL10= $_POST["EPL10"];
				$EPL11= $_POST["EPL11"];
				$EPL12= $_POST["EPL12"];


$insertardatos= "INSERT INTO exigencia VALUES('$EPL1',
											'$EPL2',
											'$EPL3',
											'$EPL4',
											'$EPL5',
											'$EPL6',
											'$EPL7',
											'$EPL8',
											'$EPL9',
											'$EPL10',
											'$EPL11',
											'$EPL12',
											$folio)";
$ejecutarInsertar = mysqli_query($enlace,$insertardatos);
	if(!$ejecutarInsertar){
		echo "Error en la linea de SQL";
	}
}

$exigencia=[$EPL1,$EPL2,$EPL3,$EPL4,$EPL5,$EPL6,$EPL7,$EPL8,$EPL9,$EPL10,$EPL11,$EPL12];
$suma_exigencia=array_sum($exigencia);
$total_exigencia= count($exigencia);
$Final_exigencia=$suma_exigencia/$total_exigencia;

mysqli_close($enlace);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Por último</title>
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
		<hr>
	</div>
</header>
<body>	
	<form name="varscontrol" action="Cierre.php" method="post">
		<center><h1>Información general</h1>
		<h3>Favor de responder lo que se solicita a continuación:</h3></center>
		<br>

	<center><section id="personales">
		<label for="G6"><H4>Edad</H4></label>
		<input type="number" name="G6" required="" min="18" placeholder="años">
		<br>
		<label for="G7"><h4>Sexo</h4></label>
		<select name="G7">
			<option disabled="">Selecciona</option>
			<option value="1">Hombre</option>
			<option value="2">Mujer</option>
			<option value="3">Prefiero no decirlo</option>
		</select>
		<br>
		<br>
		<label for="G8"><h4>Estado civil</h4></label>
		<select name="G8">
			<option disabled="">Selecciona tu estado civil</option>
			<option value="1">Soltero(a)</option>
			<option value="2">Casado(a)</option>
			<option value="3">Unión libre</option>
			<option value="4">Viudo(a)</option>
			<option value="5">Divorciado(a)/Separado(a)</option>
		</select>
		<br>
		<br>
		<label for="G9"><h4>¿Tienes hijos?</h4></label>
		<input type="radio" name="G9" value="1"> <label>Si</label>
		<input type="radio" name="G9" value="0"> <label>No</label>
		<br>
		<br>
		<label for="G10"><h4>¿Padeces alguna enfermedad crónica (ej. Diabetes, hipertensión, dislipidemia, Obesidad/sobrepeso, etc.)?</h4></label>
		<input type="radio" name="G10" value="0"> <label>No</label>
		<input type="radio" name="G10" value="1"> <label>Si</label>
		<br>
		<br>
	</section></center>
	<br>

	<center><section id="residencia">
		<label for="EPL14_1"><h4>¿A qué hora sueles entrar a guardia?</h4></label>
		<input type="time" name="EPL14_1" required="">
		<br>
		<br>
		<label for="EPL14_2"><h4>¿A qué hora sueles salir de guardia?</h4></label>
		<input type="time" name="EPL14_2" required="">
		<br>
		<br>
		<label for="EPL13"><h4>¿Cuál es la frecuencia de tus guardias?</h4></label>
		<select name="EPL13">
			<option disabled="">Selecciona la frecuencia</option>
			<option value="1">Guardias AB</option>
			<option value="2">Guardias ABC</option>
			<option value="3">Guardias ABCD</option>
			<option value="4">Otra frecuencia</option>
		</select>
		<br>
		<br>
		<label for="G4"><h4>¿Qué especialidad (o subespecialidad) cursas actualmente?</h4></label>
		<select name="G4">
			<option disabled="">Selecciona tu especialidad/subespecialidad</option>
			<option value="1">Anestesiología</option>
			<option value="2">Anestesiología pediátrica</option>
			<option value="3">Anestesiología para servicios rurales de la salud</option>
			<option value="4">Algología</option>
			<option value="5">Cuidados paliativos</option>
			<option value="6">Neuroanestesiología</option>
			<option value="7">Angiología, cirugía vascular y endovascular</option>
			<option value="8">Anatomía patológica</option>
			<option value="9">Neuropatología</option>
			<option value="10">Patología pediátrica</option>
			<option value="11">Comunicación, audiología, otoneurología y foniatría</option>
			<option value="12">Cardiología clínica</option>
			<option value="13">Cardiología pediátrica</option>
			<option value="14">Cardiología clínica</option>
			<option value="15">Cardiología intervencionista</option>
			<option value="16">Cardiología intervencionista en cardiopatías congénitas</option>
			<option value="17">Ecocardiografía adultos</option>
			<option value="18">Ecocardiografía pediátrica</option>
			<option value="19">Electrofisiología</option>
			<option value="20">Rehabilitación cardiaca y prevención secundaria</option>
			<option value="21">Cirugía general</option>
			<option value="22">Cirugía bariátrica</option>
			<option value="23">Cirugía para servicios rurales de salud</option>
			<option value="24">Cirugía de transplantes</option>
			<option value="25">Cirugía oral y maxilofacial</option>
			<option value="26">Cirugía neurológica</option>
			<option value="27">Neurocirugía pediátrica</option>
			<option value="28">Terapia endovascular neurológica</option>
			<option value="29">Cirugía pediátrica</option>
			<option value="30">Cirugía plástica, estética y reconstructiva</option>
			<option value="31">Cirugía cardiaca en adultos</option>
			<option value="32">Cirugía cardiaca en pediatría</option>
			<option value="33">Cirugía cardiotorácica</option>
			<option value="34">Cirugía torácica no cardiaca</option>
			<option value="35">Cirugía de tórax pediátrica no cardiaca</option>
			<option value="36">Dermatología</option>
			<option value="37">Dermatología pediátrica</option>
			<option value="38">Dermatopatología</option>
			<option value="39">Endocrinología</option>
			<option value="40">Endocrinología pediátrica</option>
			<option value="41">Coloproctología</option>
			<option value="42">Gastroenterología</option>
			<option value="43">Gastroenterología pediatrica</option>
			<option value="44">Endoscopia del aparato digestivo</option>
			<option value="45">Cirugía del aparato digestivo</option>
			<option value="46">Genética médica</option>
			<option value="47">Genética molecular</option>
			<option value="48">Citogenética</option>
			<option value="49">Geriatría</option>
			<option value="50">Ginecología y obstetricia</option>
			<option value="51">Biología de la reproducción</option>
			<option value="52">Medicina materno fetal</option>
			<option value="53">Urología ginecológica</option>
			<option value="54">Hematología</option>
			<option value="55">Hematología pediátrica</option>
			<option value="56">Hematología</option>
			<option value="57">Infectología adultos</option>
			<option value="58">Infectología pediátrica</option>
			<option value="59">Inmunología clínica y alergia</option>
			<option value="60">Medicina aeroespacial</option>
			<option value="61">Medicina crítica</option>
			<option value="62">Medicina crítica en obstetricia</option>
			<option value="63">Medicina del deporte</option>
			<option value="64">Medicina familiar</option>
			<option value="65">Medicina del niño y el adulto para los servicios rurales de salud</option>
			<option value="66">Medicina integrada</option>
			<option value="67">Medicina interna</option>
			<option value="68">Medicina legal y forense</option>
			<option value="69">Medicina de rehabilitación</option>
			<option value="70">Rehabilitación cardiaca</option>
			<option value="71">Medicina del trabajo</option>
			<option value="72">Medicina del trabajo y ambiental</option>
			<option value="73">Medicina de urgencias</option>
			<option value="74">Urgencias pediátricas</option>
			<option value="75">Medicina nuclear</option>
			<option value="76">Medicina nuclear cardiológica</option>
			<option value="77">Medicina nuclear oncológica, molecular y terapéutica</option>
			<option value="78">Nefrología</option>
			<option value="79">Nefrología pediátrica</option>
			<option value="80">Neumología</option>
			<option value="81">Neumología pediátrica</option>
			<option value="82">Medicina del sueño</option>
			<option value="83">Broncoscopía intervencionista</option>
			<option value="84">Broncoscopía intervencionista pediátrica</option>
			<option value="85">Fisiología respiratoria</option>
			<option value="86">Endoscopia torácica</option>
			<option value="87">Neurofisiología clínica</option>
			<option value="88">Neurología adultos</option>
			<option value="89">Neurología pediátrica</option>
			<option value="90">Oftalmología</option>
			<option value="91">Oncología médica</option>
			<option value="92">Oncología pediátrica</option>
			<option value="93">Cirugía oncológica</option>
			<option value="94">Cirugia oncológica pediátrica</option>
			<option value="95">Ginecología oncológica</option>
			<option value="96">Ortopedia y Traumatología</option>
			<option value="97">Otorrinolaringología y Cirugia de cabeza y cuello</option>
			<option value="98">Otorrinolaringología pediátrica</option>
			<option value="99">Neuro-otología</option>
			<option value="100">Patología clínica</option>
			<option value="101">Pediatría</option>
			<option value="102">Neonatología</option>
			<option value="103">Medicina del enfermo pediátrico en estado crítico</option>
			<option value="104">Psiquiatría</option>
			<option value="105">Psiquiatría infantil y de la adolescencia</option>
			<option value="106">Radiología e imagen</option>
			<option value="107">Radiología pediátrica</option>
			<option value="108">Radiología vascular e intervencionista</option>
			<option value="109">Imagen de la mama</option>
			<option value="110">Neurorradiología</option>
			<option value="111">Imagen del sistema musculoesquelético</option>
			<option value="112">Radio-oncología</option>
			<option value="113">Reumatología</option>
			<option value="114">Reumatología pediátrica</option>
			<option value="115">Salud pública</option>
			<option value="116">Epidemiología</option>
			<option value="117">Medicina preventiva</option>
			<option value="118">Calidad de la atención clínica</option>
			<option value="119">Urología</option>
			<option value="120">Transplante renal</option>
		</select>
		<br>
		<br>
		<label for="G5"><h4>¿Qué año de residencia cursas actualmente?</label></h4>
		<select name="G5">
			<option disabled="">Selecciona el año de tu residencia en curso</option>
			<option value="1">R1</option>
			<option value="2">R2</option>
			<option value="3">R3</option>
			<option value="4">R4</option>
			<option value="5">R5</option>
			<option value="6">R6</option>
			<option value="7">R7</option>
			<option value="8">R8 o superior</option>
		</select>
		<br>
		<br>
		<label for="EPL15"><h4>¿Tienes algún cargo de responsabilidad de equipo de trabajo (ej. jefe de residentes)?</h4></label>
		<input type="radio" name="EPL15" value="1"> <label>Si</label>
		<input type="radio" name="EPL15" value="0"> <label>No</label>
		<br>
		<br>
	</section></center>
		<br>
		<br>
<center><section id="tablames">
	<table id="1mes" border="1">
		<thead>
			<tr>
				<td colspan="2"><center><h4>En el último mes...</h4></center></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><label for="G1">¿Sufriste la pérdida de un ser querido?</label></td>
				<td>
					<center><input type="radio" name="G1" value="1"> <label>Si</label>
					<input type="radio" name="G1" value="0"> <label>No</label></center>
				</td>
			</tr>
			<tr>
				<td><label for="G2">¿Sufriste algún accidente?</label></td>
				<td>
					<center><input type="radio" name="G2" value="1" required> <label>Si</label>
					<input type="radio" name="G2" value="0"> <label>No</label></center>
				</td>
			</tr>
			<tr>
				<td><label for="G3">¿Fuiste víctima de una situación violenta?</label></td>
				<td>
					<center><input type="radio" name="G3" value="1" required> <label>Si</label>
					<input type="radio" name="G3" value="0"> <label>No</label></center>
				</td>
			</tr>
			<tr>
				<td>¿Has usado ansiolíticos?</td>
				<td>
					<center><input type="radio" name="G11" value="1" required> <label>Si</label>
					<input type="radio" name="G11" value="0"> <label>No</label></center>
				</td>
			</tr>
			<tr>
				<td>¿Has usado antidepresivos?</td>
				<td>
					<center><input type="radio" name="G12" value="1"> <label>Si</label>
					<input type="radio" name="G12" value="0"> <label>No</label></center>
				</td>
			</tr>
			<tr>
				<td>¿Has usado hipnóticos?</td>
				<td><center><input type="radio" name="G13" value="1" required> <label>Si</label>
				<input type="radio" name="G13" value="0"> <label>No</label></center></td>
			</tr>
		</tbody>
	</table>
</section></center>
	<br>
	<center><input type="submit" name="Perfil_completo" value="Siguiente" align="center"></center>
	</form>

</body>


</html>