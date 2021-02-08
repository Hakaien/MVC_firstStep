<?php
require_once 'modele.php';

function connexion_form(){
    require "templates/pageConnexion.php";
}

function liste_members(){
    $members = get_all_members();
    require "templates/listeMembers.php";
}

function supprimer_members($id){

    delete_member_by_id($id);
    $members = get_all_members();
    require "templates/listeMembers.php";
}

function afficher_add_member(){
    $lastID = afficher_last_ID();
    require "templates/createMember.php";
}

function ajouter_member(){
    add_member();
}

function afficher_up_to_member(){
    $data = connect_db_update();
    require "templates/updateMember.php";
}

function up_to_member() {
    update_member();
}

// Affiche une erreur dans une vue erreur.php 
// qui centralise toutes les levées d'Exceptions 
function erreur($msgErreur) {
    require 'templates/erreur.php';
}
