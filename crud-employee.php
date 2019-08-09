<?php include('header.php'); ?>

        <div class="card shadow-sm border-light">
            <div class="card-body">
                <h1 class="card-title" id="titleForm">Création d'un personnel</h1>

                <form id="addEmployeeForm">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="lastname">Nom </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="lastname" id="lastname" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="firstname">Prénom </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="firstname" id="firstname" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="birthdate">Date de naissance </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="birthdate" id="birthdate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <input class="btn btn-info font-weight-bold" type="reset" value="Annuler" id="reset">
                            <input class="btn btn-info font-weight-bold ml-2" type="submit" value="Valider" id="validate">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<script src="js/crud-employee.js"></script>