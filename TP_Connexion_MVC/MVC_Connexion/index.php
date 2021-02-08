<?php
require_once 'controller.php';

try {
    if (!isset($_GET["action"])) {
        connexion_form();
        
    } else if (isset($_GET["action"])) {
        if ($_GET["action"] == "suppr") {
            if (isset($_GET["id"])) {
                supprimer_stagiaire($_GET["id"]);
            } else {
                throw new Exception("<span style='color:red'>Aucun identifiant de stagiaire envoyé</span>");
            }
        } else if ($_GET["action"] == "addChamp") {
            afficher_add_stagiaire();
        } else if ($_GET["action"] == "addSuccess") {
            ajouter_stagiaire();
            header("location:index.php");
        }else if ($_GET["action"] == "update") {
            if (isset($_GET["id"])) {
                afficher_up_to_stagiaire($_GET["id"]);
            }
        } else if ($_GET["action"] == "updateSuccess") {
            up_to_stagiaire();
            header("location:index.php");
        }
    } else {
        throw new Exception("<h1>Page non trouvée !!!</h1>");
    }
} catch (Exception $e) {

    $msgErreur = $e->getMessage();
    echo erreur($msgErreur);
}

