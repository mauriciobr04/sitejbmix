let db;
let request = indexedDB.open("CustomerDB", 1);

request.onupgradeneeded = function(event) {
    db = event.target.result;
    let objectStore = db.createObjectStore("customers", { keyPath: "id", autoIncrement: true });
    objectStore.createIndex("name", "name", { unique: false });
    objectStore.createIndex("age", "age", { unique: false });
    objectStore.createIndex("image", "image", { unique: false });
};

request.onsuccess = function(event) {
    db = event.target.result;
};

request.onerror = function(event) {
    console.error("Erro ao abrir o banco de dados:", event.target.errorCode);
};

document.getElementById('customerForm').addEventListener('submit', addCustomer);

function addCustomer(event) {
    event.preventDefault();

    let name = document.getElementById('name').value;
    let age = document.getElementById('age').value;
    let imageInput = document.getElementById('image');
    let imageFile = imageInput.files[0];
    let reader = new FileReader();

    reader.onloadend = function() {
        let customer = {
            name: name,
            age: parseInt(age),
            image: reader.result
        };

        let transaction = db.transaction(["customers"], "readwrite");
        let objectStore = transaction.objectStore("customers");

        let request = objectStore.add(customer);

        request.onsuccess = function(event) {
            console.log("Cliente adicionado com ID:", event.target.result);
            localStorage.setItem('newData', 'true'); // Indica que há novos dados
        };

        request.onerror = function(event) {
            console.error("Erro ao adicionar cliente:", event.target.errorCode);
        };

        document.getElementById('customerForm').reset();
    };

    reader.readAsDataURL(imageFile);
}
