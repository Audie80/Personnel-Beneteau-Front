//Variables globales

let idEmployee = null;


//Configuration des Fetch()
let myHeaders = new Headers();
//myHeaders.append('Access-Control-Allow-Origin', 'http://localhost:3000/'); //pour déploiement local
myHeaders.append('Access-Control-Allow-Origin', 'https://app-d2188754-becd-40a6-af9a-97795c470df7.cleverapps.io/');
myHeaders.append('Accept', 'application/json');
myHeaders.append('Content-type', 'application/json');

let myInit = {
    headers: myHeaders,
    mode: 'cors'
};

// Méthode GET par défaut, modifiable par myInit.method directement par la suite
Object.defineProperty(myInit, 'method', {
    value: 'GET',
    writable: true
});


// Url de l'API
//let baseUrl = 'http://localhost:3000/api/'; //pour déploiement local
let baseUrl = 'https://app-d2188754-becd-40a6-af9a-97795c470df7.cleverapps.io/api/';