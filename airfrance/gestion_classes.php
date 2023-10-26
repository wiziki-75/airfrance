<h2> Gestion des classes  </h2>

<?php
	$laClasse = null; 
	if(isset($_GET['action']) && isset($_GET['idclasse']))
	{
		$action = $_GET['action']; 
		$idclasse = $_GET['idclasse'];
		switch($action){
			case "sup"  : 
			$unControleur->deleteClasse($idclasse); 
			break;
			case "edit" : 
			$laClasse = $unControleur->selectWhereClasse($idclasse);
			break;
		}
	}
	require_once ("vue/vue_insert_classe.php"); 

	if (isset($_POST['Valider'])){
		//verification des données 
		if( $unControleur->testVide($_POST)){
			echo "<br> Veuillez remplir les champs.";
		}else {
			//insertion de la nouvelle classe dans la BDD 
			$unControleur->insertClasse ($_POST);
			}
	}

	if (isset($_POST['Modifier'])){
		//verification des données 
		if( $unControleur->testVide($_POST)){
			echo "<br> Veuillez remplir les champs.";
		}else {
			//update de la classe dans la BDD 
			$unControleur->updateClasse ($_POST);
			//actualiser la page 
			header("Location: index.php?page=2");
			}
	}

	if (isset($_POST['Filtrer'])){
		$filtre = $_POST['filtre']; 
		$lesClasses = $unControleur->selectLikeClasses ($filtre);
	}else{
		$lesClasses = $unControleur->selectAllClasses();
	}

	require_once ("vue/vue_select_classes.php"); 

?>