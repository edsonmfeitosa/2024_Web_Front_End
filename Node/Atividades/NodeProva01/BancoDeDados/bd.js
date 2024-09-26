//método de conexão com o banco de dados mysql
async function connect(){
    const mysql = require('mysql2/promise');
    if(global.connection && global.connection.state !== 'disconnected')
        return global.connection;

    const connection = await mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: 'usbw',
        database: 'rhac1',
        port: 3308
    })
    console.log('Conectou no MySQL');
    global.connection = connection;
    return connection;
}
//garante que a conexão inicializará automaticamente
connect();

//a.	Todos os cargos;
async function getCargos(req, res){
    const conn = await connect();
    const cargos = await conn.query('SELECT * FROM cargo');
    res.send(cargos[0]);
}
//b.	Todos os setores;
async function getSetores(req, res){
    const conn = await connect();
    const setores = await conn.query('SELECT * FROM setor');
    res.send(setores[0]);
}
//c.	Todos os funcionários;
async function getFuncionarios(req, res){
    const conn = await connect();
    const funcionarios = await conn.query('SELECT * FROM funcionario');
    res.send(funcionarios[0]);
}
//d.	Setor com o nome passado por querystring
async function getSetor(req, res){
    const conn = await connect();
    const setor = await conn.query('SELECT * FROM setor WHERE nome = ?', [req.query.nome]);
    res.send(setor[0]);
}
//e.	Funcionário com o parâmetro nome passado por :id;
async function getFuncionario(req, res){
    const conn = await connect();
    const funcionario = await conn.query('SELECT * FROM funcionario WHERE nome = ?', [req.params.id]);
    res.send(funcionario[0]);
}
//f.	Todos os funcionários do cargo passado como parâmetro no body da requisição;
async function getFuncionariosCargo(req, res){
    const conn = await connect();
    const funcionarios = await conn.query('SELECT * FROM funcionario WHERE cod_cargo = ?', [req.body.cod_cargo]);
    res.send(funcionarios[0]);
}
//g.	Todos os cargos que não possuem funcionário
async function getCargosSemFuncionario(req, res){
    const conn = await connect();
    const cargos = await conn.query('SELECT * FROM cargo c WHERE NOT EXISTS (SELECT * FROM funcionario f WHERE f.cod_cargo = c.cod_cargo)');
    res.send(cargos[0]);
}
//3. Requisição Post para inserir funcionário
async function postFuncionario(req, res){
    const conn = await connect();
    const funcionario = req.body;
    const result = await conn.query('INSERT INTO funcionario (nome, data_admissao, cod_cargo, cod_setor) VALUES (?, ?, ?, ?)', [funcionario.nome, funcionario.data_admissao, funcionario.cod_cargo, funcionario.cod_setor]);
    res.send(result[0]);
}
//4.	Crie uma requisição Put para atualizar Funcionário.
async function putFuncionario(req, res){
    const conn = await connect();
    const funcionario = req.body;
    const result = await conn.query('UPDATE funcionario SET nome = ?, data_admissao = ?, cod_cargo = ?, cod_setor = ? WHERE cod_funcionario = ?', [funcionario.nome, funcionario.data_admissao, funcionario.cod_cargo, funcionario.cod_setor, req.params.cod]);
    res.send(result[0]);
}
//5.	Crie uma requisição Delete para excluir Funcionário.
async function deleteFuncionario(req, res){
    const conn = await connect();
    const result = await conn.query('DELETE FROM funcionario WHERE cod_funcionario = ?', [req.params.cod]);
    res.send(result[0]);
}

module.exports = {getCargos, getSetores, getFuncionarios, getSetor, getFuncionario, getFuncionariosCargo, 
    getCargosSemFuncionario, postFuncionario, putFuncionario, deleteFuncionario};