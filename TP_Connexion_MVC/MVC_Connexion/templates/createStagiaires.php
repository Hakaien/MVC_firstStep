<?php
$title = "Ajouter un stagiaire";
ob_start();
?>
<h1>Ajouter un stagiaire </h1>
<br><br>

<form action="index.php?action=addSuccess" method="post">
    <table class="montableau">
        <tr>
            <th colspan="2">Insertion d'un stagiaire</th>
        </tr>
        <tr>
            <td><label for="id_membre">ID Membre :</label></td>
            <td><input type="text" name="id_membre" id="id_membre" disabled autocomplete="off" value ="<?=$lastID[0]?>"></td>
        </tr>

        <tr>
            <td><label for="nom_membre">Nom du membre :</label></td>
            <td><input type="text" name="nom_membre" id="nom_membre" autocomplete="off"></td>
        </tr>

        <tr>
            <td><label for="login_membre">Login membre :</label></td>
            <td><input type="text" name="login_membre" id="login_membre" autocomplete="off"></td>
        </tr>


        <tr>
            <td><button type="reset" name="resetADD">Annuler</button></td>
            <td><button type="submit" name="submitADD">Envoyer</button></td>
        </tr>
    </table>
    <a href="index.php">Retour</a>
    
</form>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>