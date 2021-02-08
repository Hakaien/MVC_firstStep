<?php

require("validationFunctions.php");
//---------------------------

$dataErrors=array();
//création variable en tableau

//Typologie à modifier 
//Typo de base à utiliser

//validation du téléphone
$telephone=filter_var($telephone,getSanitizeFilter("string"));

//validation de l’adresse email
if( filter_var($email, getValidateFilter("email") )===false){
    $dataErrors["email"]="Erreur: l'adresse mail est invalide.";
}

//validation de la catégorie
$categorie=filter_var($categorie,getSanitizeFilter("string"));

//préparation validation du formulaire.

//validation Text
//validation Raison_Sociale

//Validation Adresse
//Validation Ville
//Validation Commentaires_Comm

//Validation Numéraire
//Validation Ca
//Validation Effectif
//Validation Code_Postal

//Validation Menu Déroulant
//Validation Type_Client
//Validation Activité
//Validation Nature

?>