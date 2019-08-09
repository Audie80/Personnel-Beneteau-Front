<?php header("Access-Control-Allow-Origin: *"); ?>
<?php include('header.php'); ?>

        <div class="card shadow-sm border-light">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col">
                        <h1>Liste du personnel</h1>
                    </div>
                    <div class="col d-flex align-items-center justify-content-end">
                        <a href="crud-employee.php" class="btn btn-info font-weight-bold" role="button">Création d'un personnel</a>
                    </div>
                </div>

                <table class="table table-bordered table-hover table-sm table-responsive-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de naissance</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody id="employees"></tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>

<script src="js/employees.js"></script>