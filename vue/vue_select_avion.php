<h3> Listes Des Avions</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
	<tr>
		<td> Nom avion</td>
		<td> Capacite avion  </td>
		<td> Date achat </td>
		<td> Constructeur </td>
	</tr>

	<?php
	if (isset($lesAvion)){
		foreach($lesAvion as $unAvion){
			echo "<tr>"; 
			echo "<td>".$unAvion['designation']."</td>";
			echo "<td>".$unAvion['capacite']."</td>";
			echo "<td>".$unAvion['dateAchat']."</td>";
			echo "<td>".$unAvion['nom_constructeur']."</td>";
			echo "</tr>" ;
		}
	}
	?>
</table>