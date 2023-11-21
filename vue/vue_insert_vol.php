<h3> Ajout d'un nouveau vol </h3>

<form method="post">
    <table>
        <tr>
            <td>Date du vol</td>
            <td><input type="date" name="datevol" value="<?= $leVol['datevol'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td>Désignation</td>
            <td><input type="text" name="designation" value="<?= $leVol['designation'] ?? ''; ?>"></td>
        </tr>
        <tr>
            <td>Avion</td>
            <td>
                <select name="idavion">
                    <?php foreach ($lesAvion as $unAvion): ?>
                        <option value="<?= htmlspecialchars($unAvion['idavion']) ?>">
                            <?= htmlspecialchars($unAvion['designation']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pilote 1</td>
            <td>
                <select name="idpilote1">
                    <?php foreach ($lesPilotes as $unPilote): ?>
                        <option value="<?= htmlspecialchars($unPilote['idpilote']) ?>">
                            <?= htmlspecialchars($unPilote['nom']) . ' ' . htmlspecialchars($unPilote['prenom']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pilote 2</td>
            <td>
                <select name="idpilote2">
                    <?php foreach ($lesPilotes as $unPilote): ?>
                        <option value="<?= htmlspecialchars($unPilote['idpilote']) ?>">
                            <?= htmlspecialchars($unPilote['nom']) . ' ' . htmlspecialchars($unPilote['prenom']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
        </tr>
    </table>
    <input type="reset" name="Annuler" value="Annuler">
                <input hidden type="text" name="idvol" value="<?= $leVol['idvol'] ?? ''; ?>">
                <input type="submit" name="<?= isset($leVol['idvol']) ? 'Modifier' : 'Valider'; ?>" value="<?= isset($leVol['idvol']) ? 'Modifier' : 'Valider'; ?>">
</form>
