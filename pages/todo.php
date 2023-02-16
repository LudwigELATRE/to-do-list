<?php require_once('../inc/header.php'); ?>
<?php require_once('../php/todo_inc.php'); ?>

<main class="d-flex justify-content-center">
    <?php foreach ($taches as $tache) { ?>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $tache['task'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tache['due_date'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tache['priority'] ?></h6>
                <p class="card-text"><?= $tache['notes'] ?></p>
                <div class="form-check">
                    <input class="form-check-input" name="completed	" type="checkbox" value="0" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tâche terminée
                    </label>
                </div>
                <!-- <a href="../php/confirmer_inc.php?id=<?php echo $tache['id']; ?>" class="card-link">Confirmer</a> -->
                <a href="../php/delete_inc.php?id=<?php echo $tache['id']; ?>" class="card-link">Supprimer<i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
    <?php } ?>
</main>

<?php require_once('../inc/footer.php'); ?>