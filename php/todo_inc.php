<?php
require_once('../inc/init.php');
// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

// $pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
// $mdp = htmlspecialchars(addslashes($_POST['mdp']));


if (isset($_POST)) {
    $query = $db->prepare("SELECT * FROM todo_list ORDER BY due_date ASC;");
    $query->execute();
    $taches = $query->fetchAll();
}
