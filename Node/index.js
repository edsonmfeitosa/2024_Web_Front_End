const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.text());
app.use(bodyParser.json());

//conexão com o banco de dados
const Cliente = require('./BancoDeDados/Cliente');

//configurar o CORS
const cors = require('cors');
app.use(cors());

//retornando todos os clientes  
app.get('/clientes', Cliente.getClientes);
//retornando um cliente pelo id
app.get('/clientes/:id', Cliente.getCliente);
//inserindo um cliente
app.post('/clientes', Cliente.insertCliente)
//atualizando um cliente
app.put('/clientes/:id', Cliente.atualizarCliente)
//excluir o cliente
app.delete('/clientes/:id', Cliente.excluirCliente)


app.listen(3000, () => {
    console.log('Servidor rodando na porta 3000');
});