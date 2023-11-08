<h2> Gestion des pilotes </h2>

<?php

$idpilote = $_GET['idpilote'] ?? '';
$action = $_GET['action'] ?? $idpilote;

if ($action) {
    switch ($action) {
        case 'sup':
            $unControleur->deletePilote($idpilote);
            header("Location: index.php?page=3");
            exit;
        case 'edit':
            $laPilote = $unControleur->selectWherePilote($idpilote);
            break;
    }
}

require_once "vue/vue_insert_pilote.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Valider'])) {
        $unControleur->insertPilote($_POST);
        header("Location: index.php?page=3");
        exit;
    }

    if (isset($_POST['Modifier'])) {
        $unControleur->updatePilote($_POST);
        header("Location: index.php?page=3");
        exit;
    }
}

$filtre = $_POST['filtre'] ?? '';
$lesPilotes = $filtre ? $unControleur->selectLikePilote($filtre) : $unControleur->selectAllPilote();

require_once "vue/vue_select_pilote.php";

?>
