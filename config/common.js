//Variables globales

let idEmployee = null;


//Configuration des Fetch()
let myHeaders = new Headers();
myHeaders.append('Access-Control-Allow-Origin', 'http://localhost:3000/');
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
let baseUrl = 'http://localhost:3000/api/';