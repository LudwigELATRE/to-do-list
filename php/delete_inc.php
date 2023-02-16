<?php
require_once('../inc/init.php');
// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

// $pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
// $mdp = htmlspecialchars(addslashes($_POST['mdp']));

if (!empty($_GET)) {
    $id = $_GET['id'];
    echo $id;
    $query = $db->prepare("DELETE FROM todo_list WHERE id = $id");
    $query->execute();
    echo 'L\'élément a été supprimé avec succès.';
    header("location:../pages/todo.php?delete=reussie");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
