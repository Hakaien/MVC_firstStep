<?php

require("validationFunctions.php");
//---------------------------

$dataErrors=array();
//création variable en tableau

//Typologie à modifier 
//Typo de base à utiliser

//validation du téléphone
$telephone=filter_var($telephone,getSanitizeFilter("string"));

//validation de la catégorie
$categorie=filter_var($categorie,getSanitizeFilter("string"));

// validation ID ?
if (filter_var($id_user, getValidateFilter("int") )===false){
    $dataErrors["int"]="Erreur: ID incorrect";
}

// validation login
$login_user=filter_var($login_user,getSanitizeFilter("string"));

// validation pwd 
$pwd_user=filter_var($pwd_user,getSanitizeFilter("string"));

// validation email
if (filter_var($email_user, getValidateFilter("email") )===false){
    $dataErrors["email"]="Erreur: l'adresse mail est invalide.";
}

// validation fonction
$fonction=filter_var($fonction,getSanitizeFilter("string"));

?>