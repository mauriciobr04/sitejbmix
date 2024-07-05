let db;
let request = indexedDB.open("CustomerDB", 1);

request.onupgradeneeded = function(event) {
    db = event.target.result;
    db.createObjectStore("customers", { keyPath: "id", autoIncrement: true });
};

request.onsuccess = function(event) {
    db = event.target.result;
    displayLastCustomer();
};

request.onerror = function(event) {
    console.error("Erro ao abrir o banco de dados:", event.target.errorCode);
};

function displayLastCustomer() {
    let transaction = db.transaction(["customers"], "readonly");
    let objectStore = transaction.objectStore("customers");

    let request = objectStore.openCursor(null, 'prev'); // Order by descending ID

    request.onsuccess = function(event) {
        let cursor = event.target.result;
        if (cursor) {
            let customer = cursor.value;
            let customerList = document.getElementById('customerList');
            customerList.innerHTML = '';

            let li = document.createElement('li');
            li.textContent = customer.name;
            customerList.appendChild(li);

            localStorage.removeItem('newData'); // Limpa a flag após exibir os dados
        } else {
            let customerList = document.getElementById('customerList');
            customerList.innerHTML = '<li>Nenhum cliente cadastrado</li>';
        }
    };

    request.onerror = function(event) {
        console.error("Erro ao recuperar cliente:", event.target.errorCode);
    };
}
