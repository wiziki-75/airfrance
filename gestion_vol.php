<h2> Gestion des vols </h2>


<?php

	require_once ("vue/vue_insert_vol.php");
	
	$lesVols = $unControleur->selectAllVol();

	require_once ("vue/vue_select_vol.php"); 


?>