<?php
class Connexion extends BDD {
    public function verifConnexion($email, $mdp){
        $requete = "SELECT * FROM utilisateur WHERE email = :email AND mdp = :mdp";
        $donnees = array(":email" => $email, ":mdp" => $mdp);
        $select = $this->unPDO->prepare($requete); 
        $select->execute($donnees);
        return $select->fetch();
    }
}
