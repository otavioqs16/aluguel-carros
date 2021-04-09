<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aluguel de Carros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div id="topodotopo">
	<h1>Categorias</h1>
	<form action="modelos.php" method="post">
	<input type="radio" name="categoria" value="Econômico">Econômico
	<input type="radio" name="categoria" value="Luxo">Luxo
	<input type="submit" name="enviar">
	</form>
</body>
</html>