// Função para cadastrar um novo cliente
function cadastrarCliente() {
    var nomeCliente = document.getElementById('nomeCliente').value;

    // Verificar se o nome do cliente foi fornecido
    if (nomeCliente) {
        // Armazenar o nome do cliente no LocalStorage
        localStorage.setItem('ultimoCliente', nomeCliente);
    } else {
        console.error('Por favor, forneça um nome de cliente válido.');
    }
}

// Recuperar o último nome de cliente cadastrado do LocalStorage
var ultimoCliente = localStorage.getItem('ultimoCliente');

// Verificar se o último nome de cliente está presente e não é nulo
if (ultimoCliente) {
    // Selecionar o elemento onde o último nome de cliente será exibido (substitua 'ultimoNomeClienteDiv' pelo ID do elemento correspondente)
    var elementoUltimoNomeCliente = document.getElementById('texto-substituir');

    // Verificar se o elemento foi encontrado
    if (elementoUltimoNomeCliente) {
        // Substituir o texto pelo último nome de cliente cadastrado
        elementoUltimoNomeCliente.textContent = ultimoCliente;
    } else {
        console.error('Elemento não encontrado com o ID fornecido.');
    }
} else {
    console.error('Nenhum cliente cadastrado encontrado no LocalStorage.');
}