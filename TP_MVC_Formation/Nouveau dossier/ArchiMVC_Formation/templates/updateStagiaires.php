<?php 
$title = "Mettre à jour un profil";
ob_start();
?>
    <h1>Modification d'un profil </h1>
    <br><br>

    <form action="TraitementFormupdate.php" method="post">
    <table class="montableau">
        <tr>
            <td><label for="code">ID membre :</label></td>
            <td><input type="text" name="code" id="code" disabled autocomplete="off" value="<?=$data['id_membre'] ?>"></td>
            <td><input type="hidden" name="code" id="code" autocomplete="off" value="<?=$data['id_membre'] ?>"></td>
        </tr>
        
        <tr>
            <td><label for="nom_membre">Nom du membre :</label></td>
            <td><input type="text" name="nom_membre" id="nom_membre" autocomplete="off" value="<?=$data['nom_membre']?>"></td>
        </tr>
        
        <tr>
            <td><label for="login_membre">Login du membre :</label></td>
            <td><input type="text" name="login_membre" id="login_membre" autocomplete="off" value="<?=$data['login_membre']?>"></td>
        </tr>
        
        <tr>
            <td><button type="reset">Annuler</button></td>
            <td><button type="submit">Envoyer</button></td>
        </tr>
        </table>
    </form>
</body>

</html>