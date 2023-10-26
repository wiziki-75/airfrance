<h3> Ajout d'un vol </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom du vol</td>
            <td><input type="text" name="NomVol"></td>
</tr>
<tr>
            <td>Heure du Vol</td>
            <td><input type="text" name="Heuresvol"></td>
</tr>
<tr>
            <td>Destination du Vol</td>
            <td><input type="text" name="DestinationVol"></td>
</tr>
<tr>
            <td>Avion</td>
            <td><select name="Avion">
</select></td>
<tr>
            <td> Pilote 1</td>
            <td><select name="idpilote1">
</select></td>
<tr>
            <td> Pilote 2</td>
            <td><select name="idPilote2">
</select></td>
            <td> </td>
            <td>
                <input type="reset" name="Annuler" value="Annuler">
                <input type="submit" name="Valider" value="Valider">

</td>
</tr>

</table>

</form>