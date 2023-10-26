<?php
	require_once ("modele/modele.class.php"); 
	class Controleur {
		private $unModele ; 

		public function __construct (){
			//instanciation de la classe Modele
			$this->unModele = new Modele (); 
		}
	}
?>





