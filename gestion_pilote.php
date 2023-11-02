<h2> Gestion des pilotes  </h2>

<?php
	$laPilote = null; 
	if(isset($_GET['action']) && isset($_GET['idpilote']))
	{
		$action = $_GET['action']; 
		$idpilote = $_GET['idpilote'];
		switch($action){
			case "sup"  : 
			$unControleur->deletePilote($idpilote); 
			break;
			case "edit" : 
			$laPilote = $unControleur->selectWherePilote($idpilote);
			break;
		}
	}
	require_once ("vue/vue_insert_pilote.php"); 

	if (isset($_POST['Valider'])){
		//verification des données 
		if( $unControleur->testVide($_POST)){
			echo "<br> Veuillez remplir les champs.";
		}else {
			//insertion de la nouvelle classe dans la BDD 
			$unControleur->insertPilote($_POST);
			}
	}

	if (isset($_POST['Modifier'])){
		//verification des données 
		if( $unControleur->testVide($_POST)){
			echo "<br> Veuillez remplir les champs.";
		}else {
			//update de la classe dans la BDD 
			$unControleur->updatePilote($_POST);
			//actualiser la page 
			header("Location: index.php?page=2");
			}
	}

	if (isset($_POST['Filtrer'])){
		$filtre = $_POST['filtre']; 
		$lesPilotes = $unControleur->selectLikePilotes ($filtre);
	}else{
		$lesPilotes = $unControleur->selectAllPilote();
	}

	require_once ("vue/vue_select_pilote.php"); 

?>
