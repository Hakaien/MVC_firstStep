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

// Création de la liste des membres
function get_all_members()
{

    $connexion = connect_db();
    $members = array();
    $sql = "SELECT * from utilisateurs";

    foreach ($connexion->query($sql) as $row) {
        $members[] = $row;
    }
    return $members;
}

// Suppression d'un membre par id
function delete_member_by_id($id)
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

//Ajouter un membre

function add_member()
{

    $connexion = connect_db();
    $sql = "insert into utilisateurs values (:id_user, :email_user, :login_user, :pwd_user, :fonction)";
    $reponse = $connexion->prepare($sql);

    $id_user        = $_POST["id_user"];
    $email_user     = $_POST["email_user"];
    $login_user     = $_POST["login_user"];
    $pwd_user       = $_POST["pwd_user"];
    $fonction_user  = $_POST["fonction"];

    $reponse->bindValue(":id_user", $id_user, PDO::PARAM_INT);
    $reponse->bindValue(":email_user", $email_user, PDO::PARAM_STR);
    $reponse->bindValue(":login_user", $login_user, PDO::PARAM_STR);
    $reponse->bindValue(":pwd_user", $pwd_user, PDO::PARAM_STR);
    $reponse->bindValue(":fonction", $fonction_user, PDO::PARAM_STR);
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

//connexion BDD spéciale pour afficher les valeurs updates
function connect_db_update()
{
    $connexion = connect_db();
    $sql = "select * from utilisateurs where id_user=:code ";
    $reponse = $connexion->prepare($sql);
    $reponse->execute(array(":code" => $_GET["id"]));
    $data = $reponse->fetch();
    return $data;
}

//Upddate les valeurs d'un stagiaire
function update_member()
{
    $connexion = connect_db();
    $sql = "update utilisateurs set email_user=:email_user, login_user=:login_user, pwd_user=:pwd_user, fonction=:fonction where id_user=:code ";
    $reponse = $connexion->prepare($sql);

    $code       = $_POST["code"];
    $email_user = $_POST["email_user"];
    $login_user = $_POST["login_user"];
    $pwd_user   = $_POST["pwd_user"];
    $fonction   = $_POST["fonction"];

    $reponse->bindValue(":code", $code, PDO::PARAM_INT);
    $reponse->bindValue(":email_user", $email_user, PDO::PARAM_STR);
    $reponse->bindValue(":login_user", $login_user, PDO::PARAM_STR);
    $reponse->bindValue(":pwd_user", $pwd_user, PDO::PARAM_STR);
    $reponse->bindValue(":fonction", $fonction, PDO::PARAM_STR);
    $reponse->execute();
}
