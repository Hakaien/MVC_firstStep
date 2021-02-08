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
                <td><label for="">User</label></td>
                <td><input type="text" name="" id="" autocomplete="off" value=""></td>
                <td><span name="" id=""></span></td>
            </tr>

            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="" id="" autocomplete="off" value=""></td>
                <td><span name="" id=""></span></td>
            </tr>

            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name="" id="" autocomplete="off" value=""></td>
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
    </form>
</div>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>