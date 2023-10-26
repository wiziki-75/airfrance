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

		public function selectAllAvion(){
			$requete ="select * from avion ; ";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute();
			return $select->fetchAll(); 
		}

		public function selectAllPilote(){
			$requete ="select * from pilote ; ";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute();
			return $select->fetchAll(); 
		}

		public function selectAllVol(){
			$requete ="select * from vol ; ";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute();
			return $select->fetchAll(); 
		}

		public function selectAllCategorie(){
			$requete ="select * from categorie ; ";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute();
			return $select->fetchAll(); 
		}

		
	}
?>







