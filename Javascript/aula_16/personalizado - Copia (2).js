// Definição do código como string
let codigo1 = "document.getElementById('result').innerHTML += 'Quantidade de frutas: ' + frutas.length + '<br>';";
let codigo2 = "document.getElementById('result').innerHTML += 'Primeira fruta: ' + frutas[0] + '<br>';";
let codigo3 = "document.getElementById('result').innerHTML += 'Última fruta: ' + frutas[frutas.length - 1] + '<br>';";

// Exibir os códigos na tela
document.getElementById("codeOutput").innerText = codigo1 + "\n" + codigo2 + "\n" + codigo3;

// Criar um array de frutas
let frutas = ["Maçã", "Banana", "Laranja", "Uva"];

// Executar os códigos dinamicamente
eval(codigo1);
eval(codigo2);
eval(codigo3);