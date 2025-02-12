// Criar um array de frutas
let frutas = ["Abacate", "Abacaxi", "Amora", "Açai", "Cereja", "Figo"];

// Definição do código como string
let codigo1 = "document.getElementById('result').innerHTML += 'Quantidade de tipos de frutas ' + frutas.length + '<br>';";

let codigo2 = "document.getElementById('result2').innerHTML += 'Primeiro tipo de fruta ' + frutas[0] + '<br>';";

// Exibir os códigos na tela
document.getElementById("codeOutput").innerText = codigo1;

// Executar os códigos dinamicamente
eval(codigo1);

document.getElementById("codeOutput2").innerText = codigo2;
eval(codigo2);

let codigo3 = "document.getElementById('result3').innerHTML += 'Último tipo de fruta ' + frutas[frutas.length - 1] + '<br>';";
document.getElementById("codeOutput3").innerText = codigo3;
eval(codigo3);

let codigo4 = `frutas.forEach(function(item, indice, array) {
    document.getElementById("result4").innerHTML += indice + ": " + item + " / ";
});
`;
document.getElementById("codeOutput4").textContent = codigo4;
eval(codigo4);

let codigo5 = `
frutas.push("Maçã");
frutas.unshift("Kiwi");

frutas.forEach(function(item, indice, array) {
    document.getElementById("result5").innerHTML += indice + ": " + item + " / ";
});
`;
document.getElementById("codeOutput5").textContent = codigo5;
eval(codigo5);

let codigo6 = `
frutas.pop();
frutas.shift();
frutas.splice(2, 2);

frutas.forEach(function(item, indice, array) {
    document.getElementById("result6").innerHTML += indice + ": " + item + " / ";
});
`;
document.getElementById("codeOutput6").textContent = codigo6;
eval(codigo6);