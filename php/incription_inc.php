<?php
require_once('../inc/init.php');
// require('/Applications/MAMP/htdocs/to-do-list/inc/init.php');
//----------------------------------------------------------------------------------

if ($_POST) {
    extract($_POST);
    $error = "";
    if (strlen($_POST['pseudo']) > 3 && strlen($_POST['pseudo']) < 20) {
        (!empty($_POST['pseudo']) ? $pseudo = htmlspecialchars($_POST['pseudo']) : $error .= 'erreur nom <br>');
        (!empty($_POST['nom']) ? $nom = htmlspecialchars($_POST['nom']) : $error .= 'erreur nom <br>');
        (!empty($_POST['prenom']) ? $prenom = htmlspecialchars($_POST['prenom']) : $error .= 'erreur prenom <br>');
        (!empty($_POST['email']) ? $email = htmlspecialchars($_POST['email']) : $error .= 'erreur email <br>');
        (!empty($_POST['mdp']) ? $mdp = htmlspecialchars($_POST['mdp']) : $error .= 'erreur email <br>');
        (!empty($_POST['confirm_password']) ? $confir_mdp = htmlspecialchars($_POST['mdp']) : $error .= 'erreur email <br>');

        if ($mdp == $confirm_password) {
            // passwords match, continue with form submission or any other action
            if (preg_match('#^[a-zA-Z0-9_-]+$#', $_POST['pseudo'])) {
                $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                $bdd = $db->prepare("INSERT INTO membre (pseudo, nom, prenom, email, mdp, confirm_password) VALUES (:pseudo,:nom,:prenom,:email,:mdp,:confirm_password)");
                $bdd->execute(array(
                    ":pseudo" => $pseudo,
                    ":nom" => $nom,
                    ":prenom" => $prenom,
                    ":email" => $email,
                    ":mdp" => $mdp,
                    ":confirm_password" => $confir_mdp,
                ));
                header("location:../index.php?inscription=reussie");
            } else {
                echo 'Votre pseudo contient des caractere interdit';
            }
        } else {
            // passwords do not match, display error message
            echo "Passwords do not match!";
        }
    } else {
        echo 'Votre pseudo doit etre compris entre 3 et 20 caracteres';
    }

    // echo "<br>";
    // echo var_dump($_POST['civilite']);

    // echo "<pre>";
    // echo print_r($bdd);
    // echo "</pre>";
    // require_once('/Applications/MAMP/htdocs/php_etude/projet-php/boutique/pages/inscription.php');

    exit();
} else {
    header("Location:to-do-list/pages/inscription.php?send=error");
    exit();
}
