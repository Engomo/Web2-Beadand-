<?php
	$controllerfile = "szoroz2";
	//$controllerfile = "hozzadad10";
	$nezet = "Viewh1";
	include("controllers/".$controllerfile.".php");
	include("models/view_loader.php");
	include("views/viewh1.php");
	include("views/viewh3.php");
	$osztaly = ucfirst($controllerfile).'_Controller';
	$controller = new $osztaly($nezet);
?>
