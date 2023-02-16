<?php
/*Envoie des element du formulaire dans la base de donnée Mysql */
//Affichage des erreurs
error_reporting(E_ALL);
ini_set('display_error', TRUE);
ini_set('display_startup_errors',  TRUE);

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

/* on se connecte à la base de données*/
$host = "localhost";
$dbname = "todo";
$user = "root";
$mdp = "";
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $mdp);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo ("La connexion a bien été realiser");
    //die($db);
} catch (PDOException $e) {
    die("une erreur a été trouvée : " . $e->getMessage());
}

//Déclaration d'une variable qui va contenir nos message

$content = '';

require_once('function.php');

// deux constante pour nos chemins

define('URL', 'http://http://localhost/to-do-list/');


define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'] . '/to-do-list/');

// echo URL;

// echo '<br>';

// echo RACINE_SITE;

//Ouverture de la session
session_start();
