<h3> Listes Des vols</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
	<tr>
		<td> Nom Vol</td>
		<td> Heures vol  </td>
		<td> Destination Vol </td>
	</tr>

	<?php
	if (isset($lesVols)){
		foreach($lesVols as $Levol){
			echo "<tr>"; 
			echo "<td>".$Levol['NomVol']."</td>";
			echo "<td>".$Levol['HeuresVol']."</td>";
			echo "<td>".$Levol['Destination vol']."</td>";
			echo "</tr>" ;
		}
	}
	?>
</table>