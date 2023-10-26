<?php
	require_once("controleur/controleur.class.php");
	//instanciation de la classe Controleur
	$unControleur = new Controleur (); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Air France</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Air France Administration </h1>
	<a href="index.php?page=1"> 
			<img src="images/logo.png" height="100" width="100"> </a>
	<a href="index.php?page=2"> 
			<img src="images/avion.png" height="100" width="100"> </a>
	<a href="index.php?page=3"> 
			<img src="images/pilote.png" height="100" width="100"> </a>
	<a href="index.php?page=4"> 
			<img src="images/vol.png" height="100" width="100"> </a>

	<?php 
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 1; 
	}
	switch ($page){
		case 1 : require_once ("home.php"); break; 
		case 2 : require_once ("gestion_avion.php"); break; 
		case 3 : require_once ("gestion_pilote.php"); break; 
		case 4 : require_once ("gestion_vol.php"); break; 
		default : require_once("erreur.php"); break;
	}
	?>
</center>
</body>
</html>