<?php
$title = "Ajouter un stagiaire";
ob_start();
?>
<h1>Ajouter un stagiaire </h1>
<br><br>

<form action="index.php?action=addSuccess" method="post">
    <table class="montableau" >
        <tr>
            <th colspan="3">Insertion d'un stagiaire</th>
        </tr>
        <tr>
            <td><label for="id_user">ID Membre :</label></td>
            <td><input type="text" name="id_user" id="id_user" disabled autocomplete="off" value="<?= $lastID[0] ?>"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="login_user">Login :</label></td>
            <td><input type="text" name="login_user" id="login_user" autocomplete="off"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="email_user">Email :</label></td>
            <td><input type="email" name="email_user" id="email_user" autocomplete="off"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="pwd_user">Password :</label></td>
            <td><input type="password" name="pwd_user" id="pwd_user" autocomplete="off"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="fonction">Fonction :</label></td>
            <td><input type="text" name="fonction" id="fonction" autocomplete="off"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="reset" name="resetADD">Annuler</button>
                <button type="submit" name="submitADD">Envoyer</button>
            </td>
            <td></td>
        </tr>
    </table>
    <a href="index.php">Retour</a>

</form>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>