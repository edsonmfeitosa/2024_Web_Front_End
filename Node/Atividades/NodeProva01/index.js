const express = require('express');
const app = express();

const bodyparser = require('body-parser');
app.use(bodyparser.text());
app.use(bodyparser.json());
const bd = require('./BancoDeDados/bd');

//Get
//a
app.get('/cargos', bd.getCargos);
//b
app.get('/setores', bd.getSetores);
//c
app.get('/funcionarios', bd.getFuncionarios);
//d
app.get('/setor', bd.getSetor);
//e
app.get('/funcionario/:id', bd.getFuncionario);
//f
app.get('/funcionariosCargo', bd.getFuncionariosCargo);
//g
app.get('/cargosSemFuncionario', bd.getCargosSemFuncionario);
//3
app.post('/funcionario', bd.postFuncionario);
//4
app.put('/funcionario/:cod', bd.putFuncionario);
//5
app.delete('/funcionario/:cod', bd.deleteFuncionario);



app.listen(3000, () => {    
    console.log('Servidor rodando na porta 3000');
});