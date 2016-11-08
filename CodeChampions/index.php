<?php
require 'data/DataCollector.php';

$database = new DataCollector([
		'database_name' => 'etm',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
]);

?>
<html>
	<head>
		<title>Sin Nombre</title>
		<link rel="stylesheet" href="css/quiz.css">
		<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Amiko|BioRhyme|Righteous|Roboto">
		<script type="text/javascript" src="js/app.js"></script>
	</head>
	<body>
		<!-- Top -->
		<section id="top-bar">
			<h1><a href="index.php">Protección ETMs</a></h1>
			<nav>
					<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="enfermedades.html">Enfermedades</a></li>
							<li><a href="mosquitos.html">Mosquitos</a></li>
							<li><a href="prevencion.html">Prevención</a></li>
					</ul>
			</nav>
    </section>

<?php
if($_POST){
	if (isset($_POST['fatiga'])) {
    $fatiga=1;
} else {
		  $fatiga=0;
}

if (isset($_POST["vomito"])) {
	$vomito=1;

}else{
$vomito=0;
}

if (isset($_POST["ganglios"])) {
	$ganglios=1;
}else{
	$ganglios=0;
}

if (isset($_POST["tos"])) {
	$tos=1;
}else{
	$tos=0;
}
if (isset($_POST["garganta"])) {
	$garganta=1;
}else{
	$garganta=0;
}


if (isset($_POST["congestion"])) {
	$congestion=1;
}else{
		$congestion=0;
}

if (isset($_POST["nauseas"])) {
	$nauseas=1;
}else{
	$nauseas=0;
}

if (isset($_POST["fiebre"])) {
	$fiebre=1;
}else{
	$fiebre=0;
}

if (isset($_POST["erupcion"])) {
	$erupcion=1;
}else{
	$erupcion=0;
}

if (isset($_POST["cabeza"])) {
	$cabeza=1;
}else{
	$cabeza=0;
}

if (isset($_POST["muscular"])) {
	$muscular=1;
}else{
	$muscular=0;
}

if (isset($_POST["articular"])) {
	$articular=1;
}else{
	$articular=0;
}

if (isset($_POST["hinchazonA"])) {
	$hinchazonA=1;
}else{
	$hinchazonA=0;
}

if (isset($_POST["ojos"])) {
	$ojos=1;
}else{
	$ojos=0;
}



	$sin_comunes=$fiebre+$erupcion+$cabeza+$muscular+$articular;
	$dengue=(100/12)*($fatiga+$vomito+$ganglios+$tos+$garganta+$congestion+$nauseas+$sin_comunes);
	$chin=(100/8)*($nauseas+$hinchazonA+$sin_comunes);
	$zika=(100/6)*($ojos+$sin_comunes);

	$database->insert("visitantes", [
			"dengue" => $dengue,
			"chikungunya" => $chin,
			"zika" => $zika,
		]);

  	echo "<div class='enf'><h1>Dengue: </h1>".$dengue."%</div>";
		echo "<div class='enf'><h1>Zika: </h1>".$zika."%</div>";
		echo "<div class='enf'><h1>Chinkungunya: </h1>".$chin."%</div>";

}else{
	echo "
	<div id='1' class='mySideNav div1'></div>
	<div id='2' class='mySideNav div2'></div>
	<div id='3' class='mySideNav div3'></div>
	<div id='4' class='mySideNav div4'></div>
	<div id='5' class='mySideNav div5'></div>
	<div id='6' class='mySideNav div6'></div>
	<div id='7' class='mySideNav div7'></div>
	<div id='8' class='mySideNav div8'></div>
	<div id='9' class='mySideNav div9'></div>
	<div id='10' class='mySideNav div10'></div>
	<div id='11' class='mySideNav div11'></div>
	<div id='12' class='mySideNav div12'></div>
	<div id='13' class='mySideNav div13'></div>
	<div id='14' class='mySideNav div14'></div>
	<section id='quiz'>

		 <h2>¿Crees tener una enfermedad transmitida por mosquitos?</h2>
		 <form class='check' action='index.php' method='post'>
			 <input type='checkbox' id='check1'  name='fatiga' value='fatiga'>
			 <label for='check1' onClick='openNav(1)'>Fatiga General</label>

			 <input type='checkbox' id='check2'  name='vomito' value='vomito'>
			 <label for='check2' onClick='openNav(2)'>Vomito</label>

			 <input type='checkbox' id='check3'  name='ganglios' value='ganglios'>
			 <label for='check3' onClick='openNav(3)'>Inflamación de ganglios</label>

			 <input type='checkbox' id='check4'  name='tos' value='tos'>
			 <label for='check4' onClick='openNav(4)'>Tos</label>

			 <input type='checkbox' id='check5'  name='garganta' value='garganta'>
			 <label for='check5' onClick='openNav(5)'>Dolor de garganta</label>

			 <input type='checkbox' id='check6'  name='congestion'>
			 <label for='check6' onClick='openNav(6)'>Congestion nasal</label>

			 <input type='checkbox' id='check7'  name='nauseas'>
			 <label for='check7' onClick='openNav(7)'>Nauseas</label>

			 <input type='checkbox' id='check14'  name='fiebre' value='fiebre'>
			 <label for='check14' onClick='openNav(14)'>Fiebre</label>

			 <input type='checkbox' id='check8'  name='erupcion' value='erupcion'>
			 <label for='check8' onClick='openNav(8)'>Erupción</label>

			 <input type='checkbox' id='check9'  name='cabeza' value='cabeza'>
			 <label for='check9' onClick='openNav(9)'>Dolor de Cabeza</label>

			 <input type='checkbox' id='check10'  name='muscular' value='muscular'>
			 <label for='check10' onClick='openNav(10)'>Dolor muscular</label>

			 <input type='checkbox' id='check11'  name='articular' value='articulae'>
			 <label for='check11' onClick='openNav(11)'>Dolor articular</label>

			 <input type='checkbox' id='check12'  name='hinchazonA' value='hinchazonA'>
			 <label for='check12' onClick='openNav(12)'>Hinchazón en Articulaciones</label>

			 <input type='checkbox' id='check13'  name='ojos' value='ojo'>
			 <label for='check13' onClick='openNav(13)'>Ojos rojos</label>

			 <input type='submit' name='btnEnviar' name='Enviar'>

		 </form>
	 </section>";
}
 ?>
		<!-- Section-Body -->


		<!-- Bottom -->
		<footer>

		</footer>
	</body>
</html>
