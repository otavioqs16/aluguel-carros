<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modelos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Modelos</h1>

	<?php
		if(isset($_POST['categoria'])){
			$_SESSION['categoria'] = $_POST['categoria'];
		}

		if($_SESSION['categoria'] == "Econômico"){
			?>
			<form action="opcionais.php" method="post">
			<input type="radio" name="modelo" value="Peugeot 208 Active">Peugeot 208 Active
			<input type="radio" name="modelo" value="Renault Kwid Life">Renault Kwid Life
			<input type="radio" name="modelo" value="Citroën C3 Origine">Citroën C3 Origine
			<input type="submit" name="enviar">
			</form>
			<?php
		}else if($_SESSION['categoria'] == "Luxo"){
			?>
			<form action="opcionais.php" method="post">
			<input type="radio" name="modelo" value="BMW X4">BMW X4
			<input type="radio" name="modelo" value="BMW X3">BMW X3
			<input type="radio" name="modelo" value="Land Rover">Land Rover
			<input type="submit" name="enviar">
			</form>
			<?php
			
		}


	?>
</body>
</html>