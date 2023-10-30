<h2> Gestion des avions </h2>


<?php

	require_once ("vue/vue_insert_avion.php"); 

	$lesAvion = $unControleur->selectAllAvion();

	require_once ("vue/vue_select_avion.php"); 

?>
