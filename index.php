<?php
 	
 	require_once 'bootstrap.php';
	
	
	$cliente = new Cliente();
	
	
	$cliente->setNome('Client di');
	$cliente->setCognome('Prova');
	
	$cliente->save();
 	
 	
 	
 	
?>