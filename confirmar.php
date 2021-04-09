<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Confirmar</h1>
	<?php
	echo "<b>Categoria</b>: " . $_SESSION['categoria'] . "<br>";
	echo "<b>Modelo</b>: " . $_SESSION['modelo'] . "<br>";

	if(isset($_POST['check'])){
		$_checkbox = $_POST['check'];

	foreach($_checkbox as $_valor){
    	echo "<b>Opcionais</b>: " . $_valor . "<br>";
	}
	}
	?>
</body>
</html>