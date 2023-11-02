<?php
	class Categorie extends BDD {

		public function selectAllAvion(){
			$requete ="select * from avion ; ";
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