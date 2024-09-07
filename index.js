const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.json());

//simulando um banco de dados
let alunos = [
    {id: 1, nome: 'Edson', idade: 23},
    {id: 2, nome: 'Maria', idade: 25},
    {id: 3, nome: 'João', idade: 21}
]

//retornando todos os alunos - GET
app.get('/alunos', (req, res) => {
    console.log('GET /alunos');
    res.json(alunos);
})

//retornando um aluno específico - GET
app.get('/alunos/:id', (req, res) => {
    console.log('GET /alunos/:id');
    let id = req.params.id;
    let aluno = alunos.find(aluno => aluno.id == id);
    if(aluno){
        res.json(aluno);
    }else{
        res.status(404).send('Aluno não encontrado');
    }
})

//inserindo um aluno - POST
app.post('/alunos', (req, res) => {
    console.log('POST /alunos');
    let aluno = req.body;
    aluno.id = alunos.length + 1;
    alunos.push(aluno);
    res.status(201).json(aluno);
})

//atualizando um aluno - PUT    
app.put('/alunos/:id', (req, res) => {
    console.log('PUT /alunos/:id');
    let id = req.params.id;
    let aluno = req.body;
    let index = alunos.findIndex(aluno => aluno.id == id);
    if(index >= 0){
        alunos[index] = aluno;
        res.json(aluno);
    }else{
        res.status(404).send('Aluno não encontrado');
    }
})

//deletando um aluno - DELETE
app.delete('/alunos/:id', (req, res) => {
    console.log('DELETE /alunos/:id');
    let id = req.params.id;
    let index = alunos.findIndex(aluno => aluno.id == id);
    if(index >= 0){
        alunos.splice(index, 1);
        res.status(204).send('Aluno excluído com sucesso');
    }else{
        res.status(404).send('Aluno não encontrado');
    }
})

app.listen(3000, () => {
    console.log('Servidor rodando na porta 3000');
})