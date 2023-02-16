<?php
require_once('../inc/init.php');
// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

// $pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
// $mdp = htmlspecialchars(addslashes($_POST['mdp']));

if (!empty($_GET)) {
    $completed = $_GET['completed'];
    echo $completed;
    $query = $db->prepare("ALTER TABLE todo_list WHERE completed = :completed");
    $query->execute();

    echo 'L\'élément a été modifier avec succès.';
    header("location:../pages/todo.php?delete=reussie");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
