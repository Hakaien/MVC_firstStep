<?php

//Vérif variable pour form Text
$login_user = isset($_POST["login_user"]) ? $_POST["login_user"] : "";
$email_user = isset($_POST["email_user"]) ? $_POST["email_user"] : "";
$pwd_user = isset($_POST["pwd_user"]) ? $_POST["pwd_user"] : "";
$fonction = isset($_POST["fonction"]) ? $_POST["fonction"] : "";

//Vérif variable pour INT
$id_user = isset($_POST["id_user"]) ? $_POST["id_user"] : "";


require("validation.php");
if (empty($dataErrors)) {
    require("vueSaisie.php");
} else {
    require("vueErreur.php");
}
?>