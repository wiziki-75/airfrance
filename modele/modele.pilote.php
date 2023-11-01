<?php
	class Pilote {
		private $unPDO ; //php data object 

		public function __construct (){
			try{
			$url ="mysql:host=localhost;dbname=airfrance"; 
			$user = "root"; 
			$mdp ="laragon"; 
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

		public function insertPilote ($tab){
			$requete ="insert into pilote values(null,:nom, :prenom, :adresse, :email, :nbvols) ;";
			$select = $this->unPDO->prepare ($requete); 
			$donnees= array(
						":nom"=>$tab["nom"], 
						":prenom"=>$tab["prenom"],
						":adresse"=>$tab["adresse"],
						":email"=>$tab["email"],
						":nbvols"=>$tab["nbvols"]
						);
			$select->execute($donnees);
		}

		public function deletePilote ($idpilote){
			$requete ="delete from pilote where idpilote=:idpilote ;"; 
			$select = $this->unPDO->prepare ($requete); 
			$donnees=array(":idpilote"=>$idpilote);
			$select->execute($donnees);
		}

		public function selectWherePilote ($idpilote){
			$requete="select * from pilote where idpilote=:idpilote;";
			$select = $this->unPDO->prepare ($requete); 
			$donnees=array(":idpilote"=>$idpilote);
			$select->execute($donnees);
			return $select->fetch() ;
		}

		public function updatePilote ($tab){
			$requete ="update pilote set nom =:nom, prenom =:prenom, adresse =:adresse, email=:email, nbvols=:nbvols where idpilote = :idpilote; ";
			$donnees= array(
						":nom"=>$tab["nom"], 
						":prenom"=>$tab["prenom"],
						":adresse"=>$tab["adresse"],
						":email"=>$tab["email"],
						":nbvols"=>$tab["nbvols"]
						);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute($donnees);
		}
		public function selectLikePilotes ($filtre){
			$requete ="select * from pilote where nom like :filtre or prenom like :filtre ; ";
			$select = $this->unPDO->prepare ($requete); 
			$donnees=array(":filtre"=>"%".$filtre."%");
			$select->execute($donnees);
			return $select->fetchAll(); 
		}
	}
?>