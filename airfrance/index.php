<?php
	require_once("controleur/controleur.class.php");
	//instanciation de la classe Controleur
	$unControleur = new Controleur (); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site Scoalrité</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Site Scolarité IRIS </h1>
	<a href="index.php?page=1"> 
			<img src="images/logo.png" height="100" width="100"> </a>
	<a href="index.php?page=2"> 
			<img src="images/classes.png" height="100" width="100"> </a>
	<a href="index.php?page=3"> 
			<img src="images/professeur.png" height="100" width="100"> </a>
	<a href="index.php?page=4"> 
			<img src="images/etudiant.png" height="100" width="100"> </a>
	<a href="index.php?page=5"> 
			<img src="images/enseignement.png" height="100" width="100"> </a>

	<?php 
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 1; 
	}
	switch ($page){
		case 1 : require_once ("home.php"); break; 
		case 2 : require_once ("gestion_classes.php"); break; 
		case 3 : require_once ("gestion_professeurs.php"); break; 
		case 4 : require_once ("gestion_etudiants.php"); break; 
		case 5 : require_once ("gestion_enseignements.php"); break; 
		default : require_once("erreur.php"); break;
	}
	?>
</center>
</body>
</html>