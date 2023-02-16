<?php require_once('../inc/header.php'); ?>

<main>
    <div class="container">
        <div class="row row-change">
            <form class="col-md-6" action="../php/connexion_inc.php" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" id="formGroupExampleInput2" placeholder="Entrez votre Pseudo">
                </div>
                <div class="form-group">
                    <label for="mdp">Password</label>
                    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" value="connexion" class="btn btn-primary connexions">Connexion</button>
            </form>
        </div>
    </div>
</main>

<?php require_once('../inc/footer.php'); ?>