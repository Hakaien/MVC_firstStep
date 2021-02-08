<?php
$title = "Liste des Stagiaires";
ob_start();
?>
<h1>Liste des Membre</h1>
<table class="montableau">
    <tr>
        <th> ID Member </th>
        <th> Login User </th>
        <th> Password User </th>
        <th> Email User </th>
        <th> Fonction </th>
        <th> Delete </th>
    </tr>
    <?php
    foreach ($members as $member) {
        echo "<tr>";
        echo "<td class='colid'><a href=index.php?action=update&id=$member[id_user]> $member[id_user] </a></td>";
        echo "<td> $member[login_user] </td>";
        echo "<td> $member[pwd_user] </td>";
        echo "<td> $member[email_user] </td>";
        echo "<td> $member[fonction] </td>";
        echo "<td class='colsuppr'><a href=index.php?action=suppr&id=$member[id_user]>Supprimer</a></td>";
    }
    ?>
    </tr>
    <tr>
        <td class="btnADD" colspan="6">
            <a href="index.php?action=addChamp" id="addStagiaire">Ajouter un membre</a>
        </td>
    </tr>
</table>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>