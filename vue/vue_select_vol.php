<h3> Listes Des vols</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
	<tr>
		<td>Date</td>
		<td>Désignation</td>
		<td>Avion</td>
		<td>Pilotes</td>
	</tr>

	<?php
	if (isset($lesVols)){
		foreach($lesVols as $Levol){
			echo "<tr>"; 
			echo "<td>".$Levol['datevol']."</td>";
			echo "<td>".$Levol['designation']."</td>";
			echo "<td>".$Levol['NomAvion']."</td>";
			echo "<td>".$Levol['NomPilote1']. " & " . $Levol['NomPilote2'] . "</td>";
			echo "</tr>" ;
		}
	}
	?>
</table>