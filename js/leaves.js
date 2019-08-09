{
    // Variables
    let dateRowAll = document.querySelector("#dateRowAll");
    let monthSelect = document.querySelector("#month");
    let employeesList = [];
    let employeesLeaves = [];


    // Remplissage du tableau de tous les congés
    reloadEmployeesLeaves = () => {

        //Ménage de la zone
        dateRowAll.innerHTML = '';

        //On ajoute un message si pas d'employés'
        if (employeesLeaves.length === 0) {
            dateRowAll.innerHTML += `<tr><td colspan="365">Il n'y a pas d'employés dans cette entreprise</td></tr>`;

        } else {
            // Ajout d'une ligne par employé
            for (let i = 0; i < employeesList.length; i++) {
                addemployee(employeesList[i]);

                // Mise en couleur des cellules congés
                for (let j = 0; j < employeesLeaves.length; j++) {
                    if (employeesLeaves[j].ID_EMPLOYEE == employeesList[i].ID_EMPLOYEE) {
                        colorLeave(employeesLeaves[j])
                    }
                }
            } 
        }

        // Données cliquables
        let employeeLink = document.querySelectorAll(".employeeLink")
        Array.from(employeeLink).forEach((element) => {
            element.addEventListener('click', (event) => {
                goToEmployeePage(element)
            });
        });
    };


    // Affichage des différents mois selon l'option choisie de la liste déroulante
    monthSelect.addEventListener('click', (event) => {
        let tdDate = document.querySelectorAll(".tdDate");
        let tdMonth;

        // On récupère la valeur du select
        let month = monthSelect.value;

        // On récupère le mois dans l'ID pour pouvoir le comparer avec l'option du select
        for (let i = 0; i < tdDate.length; i++) {
            tdMonth = tdDate[i].id.split("_")[1].split("-")[1];

            // Si l'option par défaut est sélectionnée, on affiche tous les mois
            if (month == '') {
                tdDate[i].style.display = "table-cell";

            } else {
                // On masque tout
                tdDate[i].style.display = "none";

                // Puis on affiche seulement les <td> concernés
                if (tdMonth == month) {
                    tdDate[i].style.display = "table-cell";
                }
            }
        }
    });


    // Ajout des cellules au tableau
    let addemployee = (employee) => {

        // Ajout de la première cellule avec les nom et prénom de l'employé
        dateRowAll.innerHTML += `<tr id="employee-` + employee.ID_EMPLOYEE + `"></tr>`;
        let trId = '#employee-' + employee.ID_EMPLOYEE;
        let employeeName = `
        <td><span class="employeeLink" style="cursor:pointer">` + employee.LastName + `</span></td>
        <td><span class="employeeLink" style="cursor:pointer">` + employee.FirstName + `</span></td>`;
        document.querySelector(trId).insertAdjacentHTML('afterbegin', employeeName);

        let idCell;

        // Janvier
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-01-0' + i;
            } else {
                idCell = 'td_2019-01-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Février
        for (let i = 1; i <= 28; i++) {
            if (i < 10) {
                idCell = 'td_2019-02-0' + i;
            } else {
                idCell = 'td_2019-02-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Mars
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-03-0' + i;
            } else {
                idCell = 'td_2019-03-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Avril
        for (let i = 1; i <= 30; i++) {
            if (i < 10) {
                idCell = 'td_2019-04-0' + i;
            } else {
                idCell = 'td_2019-04-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Mai
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-05-0' + i;
            } else {
                idCell = 'td_2019-05-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Juin
        for (let i = 1; i <= 30; i++) {
            if (i < 10) {
                idCell = 'td_2019-06-0' + i;
            } else {
                idCell = 'td_2019-06-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Juillet
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-07-0' + i;
            } else {
                idCell = 'td_2019-07-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Août
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-08-0' + i;
            } else {
                idCell = 'td_2019-08-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Septembre
        for (let i = 1; i <= 30; i++) {
            if (i < 10) {
                idCell = 'td_2019-09-0' + i;
            } else {
                idCell = 'td_2019-09-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Octobre
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-10-0' + i;
            } else {
                idCell = 'td_2019-10-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Novembre
        for (let i = 1; i <= 30; i++) {
            if (i < 10) {
                idCell = 'td_2019-11-0' + i;
            } else {
                idCell = 'td_2019-11-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }

        // Décembre
        for (let i = 1; i <= 31; i++) {
            if (i < 10) {
                idCell = 'td_2019-12-0' + i;
            } else {
                idCell = 'td_2019-12-' + i;
            }
            let cell = `<td class="tdDate" id="` + idCell + `"></td>`;
            document.querySelector(trId).insertAdjacentHTML('beforeend', cell);
        }
    }


    // Mise en couleur des congés
    let colorLeave = (leave) => {

        // Ajouter une méthode qui regarde si la date est incluse dans les congés, si oui colorer la td
        tdDate = document.querySelectorAll(".tdDate");
        let idTr;
        let idTdDate;
        let tag;
        for (let i = 0; i < tdDate.length; i++) {
            // On récupère la date dans l'ID pour pouvoir la comparer avec les dates de congés
            idTdDate = tdDate[i].id.split("_")[1];

            // On compare que les <td> pas les <th>
            tag = tdDate[i].id.split("_")[0];

            // On prend uniquement la ligne de l'employé concerné
            idTr = tdDate[i].parentNode.id.split("-")[1];

            if (idTdDate >= leave.BeginningDate && idTdDate <= leave.EndingDate && tag == 'td' && idTr == leave.ID_EMPLOYEE) {
                tdDate[i].style.backgroundColor = 'green';
            }
        }
    }


    //Déclaration de la méthode qui permet d'aller sur la page de l'employé
    goToEmployeePage = (element) => {

        //Récupération de l'id de l'employé et enregistrement dans le sessionStorage
        idEmployee = element.parentNode.parentNode.id.split("-")[1]
        sessionStorage.setItem('idEmployee', idEmployee);

        //On fait un redirect sur la page employé
        document.location = './employee.php'
    }


    // Récupération des données de l'API - Employés et leurs congés
    let getEmployeesLeaves = function () {
        myInit.method = 'GET';
        let url = baseUrl + 'leaves/';
        fetch(url, myInit).then(function (response) {
            response.json().then(function (result) {
                employeesLeaves = result;
                reloadEmployeesLeaves();
            });
        });
    }


    // Récupération des données de l'API - Liste des employés
    let getEmployees = function () {
        myInit.method = 'GET';
        let urlGet = baseUrl + 'employees';
        fetch(urlGet, myInit).then(function (response) {
            response.json().then(function (result) {
                employeesList = result;
                getEmployeesLeaves();
            });
        });
    }


    // Chargement des données au chargement de la page
    window.onload = getEmployees();
}