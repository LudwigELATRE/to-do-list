<?php
require_once('../inc/init.php');

// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

if ($_POST) {

    extract($_POST);

    $error = "";

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (strlen($_POST['task']) > 3 && strlen($_POST['task']) < 50) {
        (!empty($_POST['task']) ? $task = htmlspecialchars($_POST['task']) : $error .= 'erreur tache <br>');
        (!empty($_POST['due_date']) ? $due_date = htmlspecialchars($_POST['due_date']) : $error .= 'erreur date <br>');
        (!empty($_POST['priority']) ? $priority = $_POST['priority'] : $error .= 'erreur prioriter <br>');
        (!empty($_POST['notes']) ? $notes = htmlspecialchars($_POST['notes']) : $error .= 'erreur notes <br>');

        $query = $db->prepare("INSERT INTO todo_list (task, due_date, priority, notes) VALUES (:task,:due_date,:priority,:notes)");
        $query->execute(array(
            ":task" => $task,
            ":due_date" => $due_date,
            ":priority" => $priority,
            ":notes" => $notes,
        ));
        header("location: ../pages/todo.php?tache-ajouter=reussie");
    } else {
        echo 'Votre tache doit etre compris entre 3 et 20 caracteres';
    }
} else {
    header("Location:to-do-list/pages/inscription.php?send=error");
    exit();
}
