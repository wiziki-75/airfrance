<h3> Ajout d'un nouvel avion </h3>

<form method="post">
	<table>
		<tr>
			<td> Désignation </td>
			<td> <input type="text" name="designation"></td>
		</tr>
        <tr>
			<td> Capacité </td>
			<td> <input type="text" name="capacite"></td>
		</tr>
        <tr>
			<td> Date d'achat </td>
			<td> <input type="text" name="dateAchat"></td>
		</tr>
        <tr>
			<td> Constructeur </td>
			<td> <select name="idconstructeur" id=""></select></td>
		</tr>
		<tr>
			<td>  </td>
			<td> 
				<input type="reset" name="Annuler" value="Annuler">
				<input type="submit" name="Valider" value="Valider">
			</td>
		</tr>
	</table>
</form>