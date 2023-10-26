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
		foreach($lesAvion as $LAVION){
			echo "<tr>"; 
			echo "<td>".$Avion['Nomavion']."</td>";
			echo "<td>".$Avion['Capaciteavion']."</td>";
			echo "<td>".$Avion['Dateachat']."</td>";
			echo "<td>".$Avion['Constructeur']."</td>";
			echo "</tr>" ;
		}
	}
	?>
</table>