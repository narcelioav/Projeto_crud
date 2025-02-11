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
    document.getElementById("result4").innerHTML += indice + ": " + item + "<br>";
});
`;
document.getElementById("codeOutput4").textContent = codigo4;
eval(codigo4);

//frutas.push("Maçã");
//frutas.unshift("Kiwi");
let codigoa = "document.getElementById('resulta').innerHTML += 'Adicionar um item ao final do Array ' + frutas.push("Maçã"); + '<br>';";
let codigob = "document.getElementById('resultb').innerHTML += 'Adicionar um item ao inicio do Array ' + frutas.unshift("Kiwi"); + '<br>';";
let codigo5 = `frutas.forEach(function(item, indice, array) {
    document.getElementById("result5").innerHTML += indice + ": " + item + "<br>";
});
`;
document.getElementById("codeOutput5").textContent = codigo5;
eval(codigoa);
eval(codigob);
eval(codigo5);