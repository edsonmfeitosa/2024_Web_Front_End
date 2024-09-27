const express = require('express');
const app = express();

app.listen(3000, () => {
    console.log("servidor esta rodando na porta 3000");
       });

// 1: Contar o número de vogais em uma string
app.get('/contarVogais', (req, res) => {
    const str = req.query.string || '';
    const vogais = str.match(/[aeiouAEIOU]/g);
    const count = vogais ? vogais.length : 0;
    res.send(`A Palavra "${str}" contém ${count} vogais.`);
});

// acesso para teste http://localhost:3000/contarVogais?string=DigitarAPalavraAqui

// 2: Retorno de um investimento
app.get('/calcularInvestimento', (req, res) => {
    const C = parseFloat(req.query.capital);  // Capital inicial
    const i = parseFloat(req.query.juros) / 100;  // Taxa de juros 
    const t = parseInt(req.query.tempo);  // Tempo em meses
    
    const M = C * Math.pow(1 + i, t); 
    res.send(`O montante após ${t} meses será de R$ ${M.toFixed(2)}`);
});

//acesso para teste http://localhost:3000/calcularInvestimento?capital=digiteOValor&juros=digiteATaxaDeJuros&tempo=digiteOTempo

// 3: Contar quantas vezes um caractere aparece em uma string
app.get('/contarCaracter', (req, res) => {
    const str = req.query.string || '';
    const char = req.query.char || '';

    const count = str.split(char).length - 1;
    res.send(`O caractere "${char}" aparece ${count} vezes na palavra "${str}".`);
});

//acesso para teste http://localhost:3000/contarCaracter?string=digiteUmaPalavra&char=digiteUmCaracter

// 4: Verificar se um ano é bissexto
app.get('/verificarBissexto', (req, res) => {
    const ano = parseInt(req.query.ano);

    const isBissexto = (ano % 4 === 0 && ano % 100 !== 0) || ano % 400 === 0;
    const mensagem = isBissexto ? `${ano} é um ano bissexto.` : `${ano} não é um ano bissexto.`;
    res.send(mensagem);
});

//acesso para teste http://localhost:3000/verificarBissexto?ano=digiteOAno

// 5: Encontrar o menor e o maior número em um array
app.get('/menorMaior', (req, res) => {
    const numeros = req.query.numeros ? req.query.numeros.split(',').map(Number) : [];

    const menor = Math.min(...numeros);
    const maior = Math.max(...numeros);
    res.send(`O menor número é ${menor} e o maior número é ${maior}.`);
});

//acesso para teste http://localhost:3000/menorMaior?numeros=digiteOsNumerosSeparadosPorVirgula

// 6: Simulação de loteria
app.get('/loteria', (req, res) => {
    const escolhidos = req.query.numeros ? req.query.numeros.split(',').map(Number) : [];

    if (escolhidos.length !== 6 || escolhidos.some(isNaN)) {
        res.send('Por favor, forneça 6 números válidos.');
        return;
    }

    const sorteados = Array.from({ length: 6 }, () => Math.floor(Math.random() * 60) + 1);
    const acertos = escolhidos.filter(num => sorteados.includes(num)).length;

    res.send(`Os números sorteados foram: ${sorteados.join(', ')}. Você acertou ${acertos} números.`);
});

//acesso para teste http://localhost:3000/loteria?numeros=DigiteSeisNumerosSeparadosPorVirgula



