<?php
require_once 'modele.php';

function liste_stagiaires(){
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function supprimer_stagiaire($id){

    delete_stagiaire_by_id($id);
    $stagiaires = get_all_stagiaires();
    require "templates/listestagiaires.php";
}

function afficher_add_stagiaire(){
    $lastID = afficher_last_ID();
    require "templates/createStagiaires.php";
}

function ajouter_stagiaire(){
    add_stagiaire();
}

function afficher_up_to_stagiaire(){
    $data = connect_db_update();
    require "templates/updateStagiaires.php";
}

function up_to_stagiaire() {
    update_stagiaire();
}

// Affiche une erreur dans une vue erreur.php 
// qui centralise toutes les levées d'Exceptions 
function erreur($msgErreur) {
    require 'templates/erreur.php';
}
