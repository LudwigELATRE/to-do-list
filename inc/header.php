<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma to do list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/reset.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid" id="nav-bar">
                <a class="navbar-brand" href="../index.php">Ma to do list</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Acceuil</a>
                        </li>
                        <?php if (userConnected()) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./pages/ajout.php">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./pages/todo.php">Tache a faire</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/inscription.php">Incription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/connexion.php">Conexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>