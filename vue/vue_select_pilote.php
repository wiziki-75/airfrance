<h3> Liste des Pilotes </h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
	<tr>
		<td> Nom Pilote </td>
		<td> Prénom Pilote  </td>
		<td> Email </td>
		<td> Nombre de vols </td>
	</tr>

	<?php
	if (isset($lesPilotes)){
		foreach($lesPilotes as $unPilote){
			echo "<tr>"; 
			echo "<td>".$unPilote['nom']."</td>";
			echo "<td>".$unPilote['prenom']."</td>";
			echo "<td>".$unPilote['email']."</td>";
			echo "<td>".$unPilote['nbvols']."</td>"; 
			echo "</tr>" ;
		}
	}
	?>
</table>