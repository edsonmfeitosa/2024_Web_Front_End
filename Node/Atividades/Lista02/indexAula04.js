const express = require('express');
const app = express();
//usando o body-parser
const bodyParser = require('body-parser');
app.use(bodyParser.json());

//simulando um banco de dados
let escola = [
    {
        ra: '1',
        nome: "João",
        disciplinas: [
            { codigo: "MAT101", nome: "Matemática", professor: "Prof. Carlos" },
            { codigo: "HIS101", nome: "História", professor: "Prof. Ana" },
            { codigo: "POR101", nome: "Português", professor: "Prof. João" },
            { codigo: "GEO101", nome: "Geografia", professor: "Prof. Ana" }
        ]
    },
    {
        ra: '2',
        nome: "Maria",
        disciplinas: [
            { codigo: "MAT101", nome: "Matemática", professor: "Prof. Carlos" },
            { codigo: "HIS101", nome: "História", professor: "Prof. Ana" },
            { codigo: "GEO101", nome: "Geografia", professor: "Prof. Ana" }
        ]
    },
    {
        ra: '3',
        nome: "Pedro",
        disciplinas: [
            { codigo: "CIE101", nome: "Ciências", professor: "Prof. João" },
            { codigo: "HIS101", nome: "História", professor: "Prof. Ana" },
            { codigo: "POR101", nome: "Português", professor: "Prof. João" },
            { codigo: "GEO101", nome: "Geografia", professor: "Prof. Ana" },
            { codigo: "EDF101", nome: "Educação Física", professor: "Prof. Carlos" }
        ]
    }
];


//1 - Exibir todos os alunos
app.get('/alunos', (req, res) => {
    console.log('Exercício 1'); 
    res.json(escola);
});
//2 - Buscar um aluno pelo RA
app.get('/alunos/:ra', (req, res) => {
    console.log('Exercício 2');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    if(aluno){
        res.json(aluno);
    }else{
        res.status(404).send();
    }
});
//3 - Listar todas as disciplinas de um aluno
app.get('/alunos/:ra/disciplinas', (req, res) => {
    console.log('Exercício 3');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    if(aluno){
        res.json(aluno.disciplinas);
    }else{
        res.status(404).send();
    }
});
//4 - Adicionar uma disciplina para um aluno
app.post('/alunos/:ra/disciplinas', (req, res) => {
    console.log('Exercício 4');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    console.log(aluno);
    if(aluno){
        const disciplina = req.body;
        console.log(disciplina);
        aluno.disciplinas.push(disciplina);
        res.status(201).send(aluno);
    }else{
        res.status(404).send();
    }
});
//5 - Remover uma disciplina de um aluno
app.delete('/alunos/:ra/disciplinas/:codigo', (req, res) => {
    console.log('Exercício 5');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    console.log(aluno);
    if(aluno){
        const codigo = req.params.codigo;
        const disciplina = aluno.disciplinas.findIndex(d => d.codigo == codigo);
        console.log(`codigo: ${codigo}  e disciplina: ${disciplina}`);
        if(disciplina){
            aluno.disciplinas.splice(disciplina, 1);
            res.status(200).send(aluno);
        }else{
            res.status(404).send();
        }
    }else{
        res.status(404).send();
    }
});
//6 - Atualizar os dados de um aluno
app.put('/alunos/:ra', (req, res) => {
    console.log('Exercício 6');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    if(aluno){
        const atualizaAluno = req.body;
        aluno.nome = atualizaAluno.nome;
        aluno.disciplinas = atualizaAluno.disciplinas;
        res.status(200).send(aluno);
    }else{
        res.status(404).send();
    }
});
//7 - Contar o número de disciplinas de um aluno
app.get('/alunos/:ra/disciplinas/contar', (req, res) => {
    console.log('Exercício 7');
    const ra = req.params.ra;
    const aluno = escola.find(a => a.ra == ra);
    if(aluno){
        res.json({ quantidade: aluno.disciplinas.length });
    }else{
        res.status(404).send();
    }
});
//8 - Buscar alunos por disciplina
app.get('/alunos/disciplinas/:codigo', (req, res) => {
    console.log('Exercício 8');
    const codigo = req.params.codigo;
    const alunos = escola.filter(a => a.disciplinas.find(d => d.codigo == codigo));
    if(alunos){
        res.json(alunos);
    }else{
        res.status(404).send();
    }
});
//9 - Contar quantos alunos estão em uma disciplina
app.get('/alunos/disciplinas/:codigo/contar', (req, res) => {
    console.log('Exercício 9');
    const codigo = req.params.codigo;
    const alunos = escola.filter(a => a.disciplinas.find(d => d.codigo == codigo));
    if(alunos){
        res.json({ quantidade: alunos.length });
    }else{
        res.status(404).send();
    }
});
//10 - Excluir um aluno  
app.delete('/alunos/:ra', (req, res) => {
    console.log('Exercício 10');
    const ra = req.params.ra;
    const aluno = escola.findIndex(a => a.ra == ra);
    if(aluno){
        escola.splice(aluno, 1);
        res.status(200).send('Excluído com sucesso');
    }else{
        res.status(404).send();
    }
});


app.listen(3000, () => {    
    console.log('Servidor rodando na porta 3000');
}
);