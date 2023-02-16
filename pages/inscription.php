<?php require_once('../inc/header.php'); ?>

<main>
    <div class="container">
        <div class="row row-change">
            <form class="col-md-6" action="../php/incription_inc.php" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" id="formGroupExampleInput2" placeholder="Choissisez votre Pseudo" required>
                </div>
                <div class="nom">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Entrer votre Nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="formGroupExampleInput2" placeholder="Entrer votre Prenom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email" required>
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="mdp">Password</label>
                    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirme Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputConfPassword" placeholder="confirme Password" required>
                </div>
                <div>
                    <p>Ci vous avez deja un compte cliqué <a href="./connexion.php">ici.</a></p>
                    <input class="form-check-input" type="checkbox" name="condition" id="inlineCheckbox2" value=''>
                    <p><i>En créant votre compte, vous acceptez nos conditions d'utilisation.</i></p>
                </div>
                <button type="submit" value="envoyer" class="btn btn-primary">envoyer</button>
            </form>
        </div>
    </div>
</main>

<?php require_once('../inc/footer.php'); ?>