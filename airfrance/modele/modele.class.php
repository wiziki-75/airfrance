<?php
	class Modele {
		private $unPDO ; //php data object 

		public function __construct (){
			try{
			$url ="mysql:host=localhost;dbname=airfrance"; 
			$user = "root"; 
			$mdp =""; 
			//instanciation de la classe PDO 
			$this->unPDO = new PDO($url, $user, $mdp);
			}
			catch (PDOException $exp){
				echo "Erreur connexion BDD : ".$exp->getMessage (); 
			}
		}
	}
?>







