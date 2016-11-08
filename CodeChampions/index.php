<?php


if($_POST){
$fatiga=$POST["fatiga"];
}else{
	echo "<section id='quiz'>
		 <h2>¿Crees tener una enfermedad transmitida por mosquitos?</h2>
		 <form class='check' action='#' method='POST'>
			 <input type='checkbox' id='check1'  value='fatiga'>
			 <label for='check1'>Fatiga General</label>

			 <input type='checkbox' id='check2'  value='vomito'>
			 <label for='check2'>Vomito</label>

			 <input type='checkbox' id='check3'  value='ganglios'>
			 <label for='check3'>Inflamación de ganglios</label>

			 <input type='checkbox' id='check4'  value='tos'>
			 <label for='check4'>Tos</label>

			 <input type='checkbox' id='check5'  value='garganta'>
			 <label for='check5'>Dolor de garganta</label>

			 <input type='checkbox' id='check6'  value='congestion'>
			 <label for='check6'>Congestion nasal</label>

			 <input type='checkbox' id='check7'  value='nauseas'>
			 <label for='check7'>Nauseas</label>

			 <input type='checkbox' id='check14'  value='fiebre'>
			 <label for='check14'>Fiebre</label>

			 <input type='checkbox' id='check8'  value='erupcion'>
			 <label for='check8'>Erupción</label>

			 <input type='checkbox' id='check9'  value='cabeza'>
			 <label for='check9'>Dolor de Cabeza</label>

			 <input type='checkbox' id='check10'  value='muscular'>
			 <label for='check10'>Dolor muscular</label>

			 <input type='checkbox' id='check11'  value='articular'>
			 <label for='check11'>Dolor articular</label>

			 <input type='checkbox' id='check12'  value='hinchazonA'>
			 <label for='check12'>Hinchazón en Articulaciones</label>

			 <input type='checkbox' id='check13'  value='ojos'>
			 <label for='check13'>Ojos rojos</label>

			 <input type='submit' name='btnEnviar' value='Enviar'>

		 </form>
	 </section>";
}


?>
<html>
	<head>
		<title>Sin Nombre</title>
		<link rel="stylesheet" href="css/quiz.css">
		<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Amiko|BioRhyme|Righteous|Roboto">
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
					<li><a href="#">Prevención</a></li>
				</ul>
			</nav>
    </section>

		<!-- Section-Body -->


		<!-- Bottom -->
		<footer>

		</footer>
	</body>
</html>
