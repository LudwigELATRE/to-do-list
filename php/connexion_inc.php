<?php
require_once('../inc/init.php');
// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

$pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
$mdp = htmlspecialchars(addslashes($_POST['mdp']));

// Si l'user n'est pas connecté mais veux accéder à profil.php on le redirige vers index.php
if (userConnected()) {
    header('location:ajout.php');
    exit();
}

if (isset($pseudo) && isset($mdp)) {
    $query = $db->prepare("SELECT pseudo,mdp FROM membre WHERE pseudo = ?");
    $query->execute([$_POST['pseudo']]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($_POST['mdp'], $user['mdp'])) {

        // Je crée une sessions nommée membre pour stocker les infos du membre qui est connecté
        $_SESSION['user']['id_membre'] = $user['id_membre'];
        $_SESSION['user']['pseudo'] = $user['pseudo'];
        $_SESSION['user']['nom'] = $user['nom'];
        $_SESSION['user']['prenom'] = $user['prenom'];
        $_SESSION['user']['email'] = $user['email'];


        // Je redirige l'user vers profil.php afin de lui afficher les infos sur cette page
        header('location:../index.php?connexion=reussie');
        // echo 'connexion reussie';

        echo "Identifiant valid!";
    } else {
        echo "Identifiant invalid!";
    }
}
