<h3> Ajout d'un nouveau pilote </h3>

<form method="post">
    <table>
        <tr>
            <td> Nom du pilote </td>
            <td> <input type="text" name="nom" value="<?= $laPilote['nom'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td> Prénom du pilote   </td>
            <td> <input type="text" name="prenom" value="<?= $laPilote['prenom'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td> Email contact  </td>
            <td> <input type="text" name="email" value="<?= $laPilote['email'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td> Nombre de vols  </td>
            <td> <input type="text" name="nbvols" value="<?= $laPilote['nbvols'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td>  </td>
            <td> 
                <input type="reset" name="Annuler" value="Annuler">
                <input hidden type="text" name="idpilote" value="<?= $laPilote['idpilote'] ?? ''; ?>">
                <input type="submit" name="<?= isset($laPilote['idpilote']) ? 'Modifier' : 'Valider'; ?>" value="<?= isset($laPilote['idpilote']) ? 'Modifier' : 'Valider'; ?>">
            </td>
        </tr>
    </table>
</form>
