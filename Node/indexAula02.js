const express = require('express');
const app = express();

//requisições usando o use possuem regras de hierarquia
app.use('/alunos', (req, res, next) => {
    //res.send('agora eu mudei o caminho')
    console.log('executou o /alunos');
    next();
})

//exemplo de requisições HTTP
app.get('/exemploGet', (req, res) => {
    res.send('Exemplo de GET');
})

app.post('/exemploPost', (req, res) => {
    res.send('Exemplo de POST');
})

//ALL aceita todos os tipos de requisições
app.all('/exemploAll', (req, res) => {
    res.send('Exemplo de ALL');
})

//retornando um json para o front-end
app.get('/exemploJson', (req, res) => {
    res.json(
        {
            nome: 'Edson', 
            idade: 23,
            endereco: {
                rua: 'Rua 01',
                numero: 123,
                bairro: 'Bairro 01'
            }
        }
    );
})

//usando middleware
const lista01 = require('./Atividades/lista01');

app.get('/ola', (req, res) => {
    res.send(lista01.ola());
})

app.get('/ex01', (req, res) => {
    res.send(lista01.exercicio01('Edson'));
})

//passagem de parâmetro via URL
app.get('/ex02/:nome', (req, res) => {
    let nome = req.params.nome;
    res.send(lista01.exercicio01(nome));
    })

app.get('/divisao/:numero1/:numero2', (req, res) => {
    let numero1 = req.params.numero1;
    let numero2 = req.params.numero2;
    res.send(lista01.divisao(numero1, numero2).toString());
})

app.get('/divisaoQuery', (req, res) => {
    let numero1 = req.query.numero1;
    let numero2 = req.query.numero2;
    res.send(lista01.divisao(numero1, numero2).toString());
})

// app.use((req, res) => {
//     res.send('<h1>Aula 02 de Node.js</h1></br></br></br><p>teste</p>');
//     console.log('calma pessoal!');
// })




app.listen(3000, () => {
    console.log('Server está executando na porta 3000');
});