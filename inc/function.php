<?php
function userConnected()
{
    if (!isset($_SESSION['user'])) {
        return false;
    } else {
        return true;
    }
}

function user()
{
    if ($_SESSION['user']['status'] == 0) {
        return true;
    } else {
        return false;
    }
}

function deco()
{
    session_destroy();
    header('location: connexion.php');
}

// function confirme() : mixed
// {
//     try {
//         $pdo = new PDO("mysql:host=localhost;dbname=yourdatabasename", "username", "password");
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $id = $_GET['id'];
//         $stmt = $pdo->prepare("DELETE FROM table_name WHERE id = :id");
//         $stmt->bindParam(':id', $id);
//         $stmt->execute();
//         echo 'L\'élément a été supprimé avec succès.';
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
//     $pdo = null;
// }

function supprime(): mixed
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=todo", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id = $_GET['id'];
        $stmt = $pdo->prepare("DELETE FROM todo_list WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo 'L\'élément a été supprimé avec succès.';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $pdo = null;
}
