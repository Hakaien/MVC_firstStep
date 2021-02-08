<?php
$title = "Mettre à jour un profil";
ob_start();

?>
<h1>Modification d'un profil </h1>
<br><br>

<form action="index.php?action=updateSuccess" method="post">
    <table class="montableau">
        <tr>
            <th colspan=5>Profil de <?= $data['login_user'] ?></th>
        </tr>
        <tr>
            <td><label for="code">ID membre :</label></td>
            <td><input type="text" name="code" id="code" disabled autocomplete="off" value="<?= $data['id_user'] ?>"></td>
            <td><input type="hidden" name="code" id="code" autocomplete="off" value="<?= $data['id_user'] ?>"></td>
        </tr>

        <tr>
            <td><label for="login_user">Login :</label></td>
            <td><input type="text" name="login_user" id="login_user" autocomplete="off" value="<?= $data['login_user'] ?>"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="email_user">Email :</label></td>
            <td><input type="email" name="email_user" id="email_user" autocomplete="off" value="<?= $data['email_user'] ?>"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="pwd_user">Password :</label></td>
            <td><input type="password" name="pwd_user" id="pwd_user" autocomplete="off" value="<?= $data['pwd_user'] ?>"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td><label for="fonction">Fonction :</label></td>
            <td><input type="text" name="fonction" id="fonction" autocomplete="off" value="<?= $data['fonction'] ?>"></td>
            <td><span name="" id=""></span></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="reset">Annuler</button>
                <button type="submit">Envoyer</button>
            </td>
            <td></td>
        </tr>

    </table>
</form>
<a href="index.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>