{
    //Récupération de l'id
    let idEmployeeSelected = sessionStorage.getItem('idEmployee');

    
    // Variables
    let nameInfo = document.querySelector("#nameInfo");
    let birthDateInfo = document.querySelector("#birthDateInfo");
    let dateRow = document.querySelector("#dateRow");
    let monthSelect = document.querySelector("#month");
    let tdDate;
    let employeeSelected = [];
    let employeeLeaves = [];
    let idLeaveSelected;
    let popupCreateButton = document.querySelector("#popupCreateButton");
    let popupEditButton = document.querySelector("#popupEditButton");
    let popupDeleteButton = document.querySelector("#popupDeleteButton");
    

    // Raz
    sessionStorage.setItem('leaveDate', null);


    // Remplissage des infos de l'employé
    reloadEmployee = () => {

        if (employeeSelected.length !== 0) {
            nameInfo.innerHTML += employeeSelected[0].FirstName + ' ' + employeeSelected[0].LastName;
            birthDateInfo.innerHTML += 'Date de naissance : ' + employeeSelected[0].BirthDate;
        }
    };


    // Remplissage des congés de l'employé
    reloadLeaves = () => {        

        //Ménage de la zone
        dateRow.innerHTML = '';

        //On ajoute un message si pas de congés
        if (employeeLeaves.length === 0) {
            dateRow.innerHTML += `<td colspan="365">Aucun congé posé</td>`;

        } else {
            // Ajout des cellules date
            addCells();
            
            // Mise en couleur des cellules congés
            for (let i = 0; i < employeeLeaves.length; i++) {
                colorLeave(employeeLeaves[i])
            }

            // Ouverture de la pop-up de modification pour les <td> ayant la classe tdDate
            let leavePopup = document.querySelectorAll(".tdDate")
            Array.from(leavePopup).forEach((element) => {
                if (element.id.split("_")[0] == 'td') {
                    element.addEventListener('click', (event) => {
                        popUp(element)
                    });
                }
            });
        }
    };


    // Ajout des cellules au tableau
    let addCells = () => {
        let idCell;

        let writeCell = (nb, month) => {
            if (nb < 10) {
                idCell = 'td_2019-' + month + '-0' + nb;
            } else {
                idCell = 'td_2019-' + month + '-' + nb;
            }
            let cell = `<td class="tdDate" id="` + idCell + `">
            <a class="tdDate" id="` + idCell + `" data-toggle="collapse" href="#form-popup" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-square"></i>
            </a></td>`;
            dateRow.innerHTML += cell;
        }

        // Janvier
        for (let i = 1 ; i <= 31 ; i++) {
            writeCell(i, '01');
        }

        // Février
        for (let i = 1; i <= 28; i++) {
            writeCell(i, '02');
        }

        // Mars
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '03');
        }

        // Avril
        for (let i = 1; i <= 30; i++) {
            writeCell(i, '04');
        }

        // Mai
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '05');
        }

        // Juin
        for (let i = 1; i <= 30; i++) {
            writeCell(i, '06');
        }
        
        // Juillet
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '07');
        }

        // Août
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '08');
        }

        // Septembre
        for (let i = 1; i <= 30; i++) {
            writeCell(i, '09');
        }

        // Octobre
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '10');
        }

        // Novembre
        for (let i = 1; i <= 30; i++) {
            writeCell(i, '11');
        }

        // Décembre
        for (let i = 1; i <= 31; i++) {
            writeCell(i, '12');
        }
    }


    // Mise en couleur des congés
    let colorLeave = (leave) => {

        // Ajouter une méthode qui regarde si la date est incluse dans les congés, si oui colorer la td
        tdDate = document.querySelectorAll(".tdDate");
        let idTdDate;
        let tag;
        for (let i = 0; i < tdDate.length; i++) {
            // On récupère la date dans l'ID pour pouvoir la comparer avec les dates de congés
            idTdDate = tdDate[i].id.split("_")[1];

            // On compare que les <td> pas les <th>
            tag = tdDate[i].id.split("_")[0];

            if (idTdDate >= leave.BeginningDate && idTdDate <= leave.EndingDate && tag == 'td') {
                tdDate[i].style.backgroundColor = 'green';

                // On récupère l'ID_LEAVE et on l'ajoute en tant que class
                tdDate[i].classList.add(leave.ID_LEAVE);
            }
        }
    }


    //Déclaration de la méthode qui ouvre la pop-up de modification
    popUp = (element) => {

        // Si c'est une case sans congé, on affiche juste le bouton "Ajouter"
        if (element.classList.length == 1) {
            popupCreateButton.style.display = "inline";
            popupEditButton.style.display = "none";
            popupDeleteButton.style.display = "none";
        } else {
            popupCreateButton.style.display = "none";
            popupEditButton.style.display = "inline";
            popupDeleteButton.style.display = "inline";

            // Récupérer l'ID_LEAVE, le stocker dans le sessionStorage
            idLeaveSelected = element.classList[1];
            sessionStorage.setItem('idLeave', idLeaveSelected);
        }

        // Le bouton Ajouter nous amène sur le formulaire de création et remplit les dates début et fin avec la date sélectionnée
        popupCreateButton.addEventListener('click', (event) => {
            idTdDate = element.id.split("_")[1];
            sessionStorage.setItem('leaveDate', idTdDate);
            document.location = './crud-leave.php'
        });
        
        // Le bouton Modifier nous amène sur le formulaire de modification
        popupEditButton.addEventListener('click', (event) => {
            document.location = './crud-leave.php'
        });

        // Le bouton Supprimer supprime l'ID_LEAVE
        popupDeleteButton.addEventListener('click', (event) => {
            
            if (confirm("Voulez-vous réellement supprimer ce congé ?")) {

                // Communication avec l'API - Supprimer un congé
                myInit.method = 'DELETE';
                let urlDelete = baseUrl + 'employees/' + idEmployeeSelected + '/leaves/' + idLeaveSelected + '/delete';
                fetch(urlDelete, myInit).then(function (response) {
                    response.text().then(function (result) {
                        alert('Suppression réussie');
                    });
                });

                //On reload le tableau pour qu'il affiche la modification
                getLeaves();
            }
        });
    }


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

                // Puis on affiche seulement les td concernés
                if (tdMonth == month) {
                    tdDate[i].style.display = "table-cell";
                } 
            } 
        }
    });
    

    // Récupération des données de l'API - Congés de l'employé sélectionné
    let getLeaves = function () {
        myInit.method = 'GET';
        let urlGet = baseUrl + 'employees/' + idEmployeeSelected + '/leaves';
        fetch(urlGet, myInit).then(function (response) {
            response.json().then(function (result) {
                employeeLeaves = result;
                reloadLeaves();
            });
        });
    }


    // Récupération des données de l'API - Données de l'employé sélectionné
    let getEmployee = function() {
        myInit.method = 'GET';
        let url = baseUrl + 'employees/' + idEmployeeSelected;
        fetch(url, myInit).then(function (response) {
            response.json().then(function (result) {
                employeeSelected = result;
                reloadEmployee();
                getLeaves();
            });
        });
    }
    

    // Chargement des données au chargement de la page
    window.onload = getEmployee();
}