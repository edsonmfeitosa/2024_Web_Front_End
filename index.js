const express = require('express');
const app = express();


app.use((req, res) => {
    res.send('Já vou fazer a chamada');
    console.log('calma pessoal!');
})




app.listen(3000, () => {
    console.log('Server está executando na porta 3000');
});