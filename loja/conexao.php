<?php
	$servidor = "Localhost";
	$usuario = "ead";
	$banco ="db_ead";
	
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario)
?>