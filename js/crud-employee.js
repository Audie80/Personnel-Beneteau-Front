{
    //Récupération de l'id
    let idEmployeeSelected = sessionStorage.getItem('idEmployee');

    //Variables
    let addEmployeeForm = document.querySelector("#addEmployeeForm");
    let resetButton = document.querySelector("#reset");
    let firstname = document.querySelector("#firstname");
    let lastname = document.querySelector("#lastname");
    let birthdate = document.querySelector("#birthdate");
    let employeeSelected = [];


    //On ajoute au formulaire un évènement Annuler
    resetButton.addEventListener("click", (event) => {

        //Si pas d'employé sélectionné, on est en ajout
        if (employeeSelected.length === 0) {

            // Redirection
            document.location = './employees.php'

        //Sinon on est en modification
        } else {

            // Redirection
            document.location = './employee.php'
        }
    });


    //On ajoute au formulaire un évènement submit
    addEmployeeForm.addEventListener("submit", (event) => {

        // Création de l'objet employee
        let employee = {
            FirstName: firstname.value,
            LastName: lastname.value,
            BirthDate: birthdate.value
        };

        if (employee.FirstName && employee.LastName && employee.BirthDate) {

            //Si pas d'employé sélectionné, on est en ajout
            if (employeeSelected.length === 0) {

                // Communication avec l'API - Ajout d'un employé
                myInit.method = 'POST';
                Object.defineProperty(myInit, 'body', {
                    value: JSON.stringify(employee)
                });
                let urlPost = baseUrl + 'employee';
                fetch(urlPost, myInit).then(response => response.json())
                    .then(result => result.send('Création effectuée'));

                alert('Création effectuée');

            //Sinon on est en modification
            } else {

                // Communication avec l'API - Update d'un employé
                myInit.method = 'PUT';
                Object.defineProperty(myInit, 'body', {
                    value: JSON.stringify(employee)
                });
                let urlPut = baseUrl + 'employees/' + idEmployeeSelected + '/update';
                fetch(urlPut, myInit).then(response => response.json())
                    .then(result => result.send('Modification effectuée'));

                alert('Modification effectuée');

                //On efface l'id et l'employé sélectionné
                sessionStorage.setItem('idEmployee', null);
                idEmployeeSelected = null;
                employeeSelected = [];
            }

            // Redirection vers la liste des employés au bout d'un petit délai pour laisser le temps au fetch de se terminer
            function pageRedirect() {
                let delay = 400; // time in milliseconds

                setTimeout(function () {
                    document.location = './employees.php';
                }, delay);
            }
            pageRedirect();

        } else {
            alert('Veuillez remplir tous les champs');
        };
        event.preventDefault();
    });


    //Déclaration de la méthode de modification d'un employé
    let modifFormEdit = () => {
        if (idEmployeeSelected !== null && employeeSelected.length !== 0) {

            //On modifie le titre du formulaire
            titleForm.textContent = "Modification d'un personnel"

            //On remplit les champs
            firstname.value = employeeSelected[0].FirstName;
            lastname.value = employeeSelected[0].LastName;
            birthdate.value = employeeSelected[0].BirthDate;
        }
    }


    //Si on est en modification, Récupération des données de l'API - Infos de l'employé sélectionné
    if (idEmployeeSelected !== null) {
        let url = baseUrl + 'employees/' + idEmployeeSelected;
        fetch(url, myInit).then(function (response) {
            response.json().then(function (result) {
                employeeSelected = result;
                modifFormEdit();
            });
        });
    };
    
}