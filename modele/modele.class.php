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
		
		/**************** Gestion des classes  ***********/
		public function insertPilote ($tab){
			$requete ="insert into pilote values(null,:nom, :salle, :diplome) ;";
			$select = $this->unPDO->prepare ($requete); 
			$donnees= array(
						":nom"=>$tab["nom"], 
						":salle"=>$tab["salle"],
						":diplome"=>$tab["diplome"]
						);
			$select->execute($donnees);
		}
		public function selectAllPilotes (){
			$requete ="select * from pilote ; ";
			$select = $this->unPDO->prepare ($requete); 
			$select->execute();
			return $select->fetchAll(); 
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
			return $select->fetch() ; //un seul rÃ©sultat
		}
		public function updatePilote ($tab){
			$requete ="update pilote set nom =:nom, salle =:salle, diplome =:diplome where idpilote = :idpilote; ";
			$donnees= array(
						":nom"=>$tab["nom"], 
						":salle"=>$tab["salle"],
						":diplome"=>$tab["diplome"],
						":idpilote"=>$tab["idpilote"]
						);
			$select = $this->unPDO->prepare ($requete); 
			$select->execute($donnees);
		}
		public function selectLikePilotes ($filtre){
			$requete ="select * from pilote where nom like :filtre or salle like :filtre or diplome like :filtre ; ";
			$select = $this->unPDO->prepare ($requete); 
			$donnees=array(":filtre"=>"%".$filtre."%");
			$select->execute($donnees);
			return $select->fetchAll(); 
		}
	}
?>