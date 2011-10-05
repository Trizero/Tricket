<?php
  	
  	
  	require_once 'vendor/propel/runtime/lib/Propel.php';
	Propel::init("build/conf/Tricket-conf.php");
	set_include_path("build/classes" . PATH_SEPARATOR . get_include_path());
  	
    
    
    require_once 'vendor/twig/lib/Twig/Autoloader.php';
  
  	Twig_Autoloader::register();
  
  	$loader = new Twig_Loader_Filesystem('assets/template');
	
  	$twig = new Twig_Environment($loader, array(
  		  'cache' => 'assets/cache',//cache folder
  		  'auto_reload' => true //force reload, debug only
	));
	
	
?>