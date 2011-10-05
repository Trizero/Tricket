<?php
require_once "bootstrap.php";

if(isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$cliente = ClienteQuery::create()->
					 filterByUsername($username)->
				 	 filterByPassword($password)->findOne();	
	
	if($cliente === null){
		$parametri = array(
			'login_errato' => true,
			'titolo' => 'Login Errato'
		);
		
		echo $twig->render('login.twig', $parametri);
	
	}else{
		
		@ session_start();
		
		$_SESSION['idClienteLoggato'] = $cliente->getId();
	
		$parametri = array(
			'nome' => $cliente->getNome(),
			'cognome' => $cliente->getCognome(),
			'titolo' => 'Login effettuato'
		);	
			
		echo $twig->render('login_successo.twig', $parametri);
	}
		
		
	
}else{
	
	
	echo $twig->render('login.twig', array('titolo' => 'effettua_il login'));
	
}

?>