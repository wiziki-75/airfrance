<?php
	foreach (glob('modele/*.php') as $filename) {
		require_once $filename;
	}
	
	class Controleur {
		private $avion;
		private $categorie; 
		private $pilote;
		private $vol;

		public function __construct (){
			$this->avion = new Avion ();
			$this->categorie = new Categorie ();
			$this->pilote = new Pilote ();
			$this->vol = new Vol (); 
		}

		public function selectAllAvion(){
			return $this->avion->selectAllAvion();
		}
	}
?>





