<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Opcionais</h1>
	
	<form action="confirmar.php" method="post">
		<input type="checkbox" name="check[]" value="Ar condicionado">Ar condicionado
		<input type="checkbox" name="check[]" value="Air-bag">Air-bag
		<input type="checkbox" name="check[]" value="Vidros elétricos">Vidros elétricos
		<input type="submit" name="enviar" value="enviar">
	</form>

	<?php
	if(isset($_POST['modelo'])){
		$_SESSION['modelo'] = $_POST['modelo'];
	}

	?>


</body>
</html>