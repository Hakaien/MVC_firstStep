<?php
require("connect.php");

// Connexion à la BDD
function connect_db()
{
    $dsn = "mysql:dbname=" . BASE . ";host=" . SERVER;
    try {
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $connexion = new PDO($dsn, USER, PASSWD, $option);
    } catch (PDOException $e) {
        printf("Echec connexion : %s\n", $e->getMessage());
        exit();
    }
    return $connexion;
}

// Création de la liste des Stagiaires
function get_all_stagiaires()
{

    $connexion = connect_db();
    $stagiaires = array();
    $sql = "SELECT * from utilisateurs";

    foreach ($connexion->query($sql) as $row) {
        $stagiaires[] = $row;
    }
    return $stagiaires;
}

// Suppression d'un stagiaire par id
function delete_stagiaire_by_id($id)
{

    $connexion = connect_db();
    $sql = "DELETE FROM utilisateurs WHERE id_user = :id ";
    $reponse = $connexion->prepare($sql);
    $reponse->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse->execute();
    $sql2 = "ALTER TABLE utilisateurs AUTO_INCREMENT = :id";
    $reponse2 = $connexion->prepare($sql2);
    $reponse2->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse2->execute();
}

//Ajouter un stagiaire

function add_stagiaire()
{

    $connexion = connect_db();
    $sql = "insert into membres values (:id_membre, :nom_membre, :login_membre)";
    $reponse = $connexion->prepare($sql);

    $id_membre     = $_POST["id_membre"];
    $nom_membre    = $_POST["nom_membre"];
    $login_membre  = $_POST["login_membre"];

    $reponse->bindValue(":id_membre", $id_membre, PDO::PARAM_INT);
    $reponse->bindValue(":nom_membre", $nom_membre, PDO::PARAM_STR);
    $reponse->bindValue(":login_membre", $login_membre, PDO::PARAM_STR);
    $reponse->execute();
}

//connexion BDD spéciale pour afficher les valeurs updates
function connect_db_update()
{
    $connexion = connect_db();
    $sql = "select * from membres where id_membre = :code ";
    $reponse = $connexion->prepare($sql);
    $reponse->execute(array(":code" => $_GET["id"]));
    $data = $reponse->fetch();
    return $data;
}

//Upddate les valeurs d'un stagiaire
function update_stagiaire()
{
    $connexion = connect_db();
    $sql = "update membres set nom_membre=:nom_membre, login_membre=:login_membre where id_membre=:code";
    $reponse = $connexion->prepare($sql);

    $code    = $_POST["code"];
    $nom_membre   = $_POST["nom_membre"];
    $login_membre = $_POST["login_membre"];

    // Exécution de la requête préparée de modification sans contrôle de validation
    // $reponse->execute( array(   ":designation"=>$designation, 
    //                             ":prix"=>$prix,
    //                             ":categorie"=>$categorie,
    //                             ":code"=>$code));

    $reponse->bindValue(":code", $code, PDO::PARAM_STR);
    $reponse->bindValue(":nom_membre", $nom_membre, PDO::PARAM_STR);
    $reponse->bindValue(":login_membre", $login_membre, PDO::PARAM_STR);
    $reponse->execute();
}

//Récupération last_ID auto incrémenter pour afficher dans Create
function afficher_last_ID()
{
    $connexion = connect_db();
    $sql2 = "SELECT MAX(id_user)+1 from utilisateurs";
    $reponse = $connexion->prepare($sql2);
    $reponse->execute(array($sql2));
    $lastID = $reponse->fetch();
    return $lastID;
}
