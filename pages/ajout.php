<?php require_once('../inc/header.php'); ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-md-6" action="../php/ajout_inc.php" method="POST">
                <div class="form-group">
                    <label for="task">Tâche</label>
                    <input type="text" name="task" class="form-control" id="task" placeholder="Entrez votre tâche">
                </div>
                <div class="form-group">
                    <label for="due_date">Date d'échéance</label>
                    <input type="date" name="due_date" class="form-control" id="due_date">
                </div>
                <div class="form-group">
                    <label for="priority">Priorité</label>
                    <select name="priority" class="form-control" id="priority">
                        <option value="haute">Haute</option>
                        <option value="moyenne">Moyenne</option>
                        <option value="basse">Basse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea name="notes" class="form-control" id="notes" rows="3"></textarea>
                </div>
                <!-- <div class="form-check">
                    <input class="form-check-input" name="completed	" type="checkbox" value="0" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tâche terminée
                    </label>
                </div> -->
                <button type="submit" class="btn btn-primary mt-2">Enregistrer</button>
            </form>
        </div>
    </div>
</main>

<?php require_once('../inc/footer.php'); ?>