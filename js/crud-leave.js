{
    // !!! Vérifier que la date de fin est après la date de début !!!
    // !!! Vérifier qu'il n'y a pas déjà un congé à cette date quand on en crée un !!!

    //Récupération des id
    let idEmployeeSelected = sessionStorage.getItem('idEmployee');
    let idLeaveSelected = sessionStorage.getItem('idLeave');
    let leaveDateForCreate = sessionStorage.getItem('leaveDate');


    //Variables
    let addLeaveForm = document.querySelector("#addLeaveForm");
    let resetButton = document.querySelector("#reset");
    let beginningdate = document.querySelector("#beginningdate");
    let endingdate = document.querySelector("#endingdate");
    let titleFormLeave = document.querySelector("#titleFormLeave");
    let leaveSelected = [];


    //On ajoute au formulaire un évènement Annuler
    resetButton.addEventListener("click", (event) => {

        //Si congé sélectionné, on est en modification
        if (leaveSelected.length !== 0) {

            //On efface l'id et le congé sélectionné
            sessionStorage.setItem('idLeave', null);
            sessionStorage.setItem('leaveDate', null);
            idLeaveSelected = null;
            leaveSelected = [];
        }

        // Redirection
        document.location = './employee.php'
    });


    //On ajoute au formulaire un évènement submit
    addLeaveForm.addEventListener("submit", (event) => {

        let leave = {
            BeginningDate: beginningdate.value,
            EndingDate: endingdate.value,
            ID_EMPLOYEE: idEmployeeSelected
        };
        if (leave.BeginningDate && leave.EndingDate) {

            //Si pas de congé sélectionné, on est en ajout
            if (leaveSelected.length === 0) {

                // Communication avec l'API - Ajout d'un congé
                myInit.method = 'POST';
                Object.defineProperty(myInit, 'body', {
                    value: JSON.stringify(leave)
                });
                let urlPost = baseUrl + 'employees/' + idEmployeeSelected + '/leave';
                fetch(urlPost, myInit).then(response => response.json())
                    .then(result => result.send('Création effectuée'));

                alert('Création effectuée');

                //Sinon on est en modification
            } else {

                // Communication avec l'API - Update d'un congé
                myInit.method = 'PUT';
                Object.defineProperty(myInit, 'body', {
                    value: JSON.stringify(leave)
                });
                let urlPut = baseUrl + 'employees/' + idEmployeeSelected + '/leaves/' + idLeaveSelected + '/update';
                fetch(urlPut, myInit).then(response => response.json())
                    .then(result => result.send('Modification effectuée'));

                alert('Modification effectuée');

                //On efface l'id et le congé sélectionné
                sessionStorage.setItem('idLeave', null);
                sessionStorage.setItem('leaveDate', null);
                idLeaveSelected = null;
                leaveSelected = [];
            }

            // Redirection vers la fiche de l'employé au bout d'un petit délai pour laisser le temps au fetch de se terminer
            function pageRedirect() {
                let delay = 400; // time in milliseconds

                setTimeout(function () {
                    document.location = './employee.php';
                }, delay);
            }
            pageRedirect();

        } else {
            alert('Veuillez remplir tous les champs');
        };
        event.preventDefault();
    });


    //Déclaration de la méthode de modification d'un congé
    let modifFormEdit = () => {
        if (idLeaveSelected !== null && leaveSelected.length !== 0) {

            //On modifie le titre du formulaire
            titleFormLeave.textContent = "Modification d'un congé"

            //On remplit les champs
            beginningdate.value = leaveSelected[0].BeginningDate;
            endingdate.value = leaveSelected[0].EndingDate;
        }
    }


    //Si on est en modification, Récupération des données de l'API - Infos du congé sélectionné
    if (idLeaveSelected !== null) {
        let url = baseUrl + 'employees/' + idEmployeeSelected + '/leaves/' + idLeaveSelected;
        fetch(url, myInit).then(function (response) {
            response.json().then(function (result) {
                leaveSelected = result;
                modifFormEdit();
            });
        });
    };


    //Si on est en création via une popup, Récupération de la date sélectionnée pour la création
    if (leaveDateForCreate !== null) {
        //On remplit les champs
        beginningdate.value = leaveDateForCreate;
        endingdate.value = leaveDateForCreate;
    }
}