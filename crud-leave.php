<?php include('header.php'); ?>

        <div class="card shadow-sm border-light">
            <div class="card-body">
                <h1 class="card-title" id="titleFormLeave">Création d'un congé</h1>

                <form id="addLeaveForm">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="beginningdate">Date de début </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="beginningdate" id="beginningdate" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="endingdate">Date de fin </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="endingdate" id="endingdate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <input class="btn btn-info font-weight-bold" type="reset" value="Annuler" id="reset">
                            <input class="btn btn-info font-weight-bold ml-2" type="submit" value="Valider">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<script src="js/crud-leave.js"></script>