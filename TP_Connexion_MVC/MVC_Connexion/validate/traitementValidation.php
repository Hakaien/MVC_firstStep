<?php

//Vérif variable pour form Text
$raisonSociale = isset($_POST["social_reason"]) ? $_POST["social_reason"] : "";
$adresseClient = isset($_POST["address_client"]) ? $_POST["address_client"] : "";
$villeClient = isset($_POST["city_client"]) ? $_POST["city_client"] : "";
$codePostalClient = isset($_POST["cp_client"]) ? $_POST["cp_client"] : "";
$commentaireClient = isset($_POST["comment_comm"]) ? $_POST["comment_comm"] : "";

//Vérif variable pour form Numéraire
$telephoneClient = isset($_POST["tel_client"]) ? $_POST["tel_client"] : "";
$CA = isset($_POST["ca_client"]) ? $_POST["ca_client"] : "";
$effectif = isset($_POST["eff_client"]) ? $_POST["eff_client"] : "";

//Vérif variable pour form Menus
$idSect = isset($_POST["activity_client"]) ? $_POST["activity_client"] : "";
$typeClient = isset($_POST["type_client"]) ? $_POST["type_client"] : "";
$natureClient = isset($_POST["nature_client"]) ? $_POST["nature_client"] : "";

require("validation.php");
if (empty($dataErrors)) {
    require("vueSaisie.php");
} else {
    require("vueErreur.php");
}
?>