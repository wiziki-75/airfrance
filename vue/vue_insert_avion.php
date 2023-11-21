<h3> Gestion des Avions </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom de l'avion :</td>
            <td><input type="text" name="designation" value="<?= isset($_GET['action']) && $_GET['action'] === "edit" ? htmlspecialchars($avion['designation']) : ''; ?>"></td>
        </tr>
        <tr>
            <td>Capacité :</td>
            <td><input type="text" name="capacite" value="<?= isset($_GET['action']) && $_GET['action'] === "edit" ? htmlspecialchars($avion['capacite']) : ''; ?>"></td>
        </tr>
        <tr>
            <td>Date de l'achat :</td>
            <td><input type="date" name="dateAchat" value="<?= isset($_GET['action']) && $_GET['action'] === "edit" ? htmlspecialchars($avion['dateAchat']) : ''; ?>"></td>
        </tr>
        <tr>
            <td>Constructeur :</td>
            <td>
                <select name="idconstructeur">
                    <?php if (isset($constructeurs)): ?>
                        <?php foreach ($constructeurs as $constructeur): ?>
                            <option value="<?= htmlspecialchars($constructeur['idconstructeur']) ?>" <?= isset($_GET['action'], $avion['idconstructeur']) && $_GET['action'] === "edit" && $avion['idconstructeur'] === $constructeur['idconstructeur'] ? 'selected' : ''; ?>>
                                <?= htmlspecialchars($constructeur['nom']) ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </td>
        </tr>
    </table>
    <input type="reset" name="Annuler" value="Annuler">
                <input hidden type="text" name="idavion" value="<?= isset($_GET['action']) && $_GET['action'] === "edit" ? htmlspecialchars($avion['idavion']) : ''; ?>">
                <input type="submit" name="<?= $submitValue = isset($_GET['action']) && $_GET['action'] === "edit" ? "Modifier" : "Valider"; ?>" value="<?= $submitValue ?>">
</form>
