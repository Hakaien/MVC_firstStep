<?php
$title = "page de connexion";
ob_start();
?>
<div id="corpusConnexion">
    <h1>CONNEXION MVC</h1>

    <form action="index.php?action=connexionSuccess" method="POST">
        <table class="montableau" id="connexionTableau">
            <tr>
                <th></th>
                <th></th>
                <th><a href="index.php?action=addChamp">Créer un compte</a></th>
            </tr>

            <tr>
                <td><label for="loginConnect">Login</label></td>
                <td><input type="text" name="loginConnect" id="login_connect" autocomplete="off" value=""></td>
                <td><span name="loginConnect" id=""></span></td>
            </tr>

            <tr>
                <td><label for="emailConnect">Email</label></td>
                <td><input type="email" name="emailConnect" id="email_connect" autocomplete="off" value=""></td>
                <td><span name="emailConnect" id=""></span></td>
            </tr>

            <tr>
                <td><label for="pwdConnect">Password</label></td>
                <td><input type="password" name="pwdConnect" id="pwd_connect" autocomplete="off" value=""></td>
                <td><span name="pwdConnect" id=""></span></td>
            </tr>

            <tr>
                <td><button type="button" id=submitTest>test</button> </td>
                <td>
                    <button type="reset" name="resetADD">Annuler</button>
                    <button type="submit" name="submitADD">Envoyer</button>
                </td>
                <td></td>
            </tr>

        </table>
    </form>
</div>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>