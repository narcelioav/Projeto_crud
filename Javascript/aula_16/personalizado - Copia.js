var frutas = ["Abacate", "Abacaxi", "Amora", "Açai", "Cereja", "Figo"];

		//Contar a quantidade de itens no array
		//console.log("Quantidade de tipo de frutas: " + frutas.length);
// Código que queremos exibir na tela
let codigo = "document.write('Quantidade de tipo de frutas: ' + frutas.length + '<br>');";

// Exibe o código dentro do <div> no HTML
document.getElementById("codeOutput").innerText = codigo;
document.write("Quantidade de tipo de frutas: " + frutas.length + "<br><br>");

//Acessar primeiro item do array
		//console.log("Primeiro tipo de fruta: " + frutas[0]);
document.write("Primeiro tipo de fruta: " + frutas[0] + "<br><br>");

//Acessar um item do array
		//console.log("Acessar um item do array: " + frutas[2]);
document.write("Acessar um item do array: " + frutas[2] + "<br><br>");

//Acessar ultimo item do array
		//console.log("Ultimo tipo de fruta: " + frutas[frutas.length-1]);
document.write("Ultimo tipo de fruta: " + frutas[frutas.length-1] + "<br><br>");

//*************************************************************************
document.write("<h3>Ler o Array</h3>");

//Ler o array
frutas.forEach(function(item, indice, array){
		//console.log(item, indice);
document.write(indice, item + "<br>");
});

//*************************************************************************
document.write("<h3>Adicionar ao Array</h3>");

//Adicionar um item ao final do Array
frutas.push("Maçã");

//Adicionar um item ao inicio do Array
frutas.unshift("Kiwi");

//Ler o array
frutas.forEach(function(item, indice, array){
		//console.log(item, indice);
document.write(indice, item + "<br>");
});

//*************************************************************************
document.write("<h3>Deletar um Array</h3>");

//Deletar um item no final do Array
frutas.pop();

//Deletar um item no inicio do Array
frutas.shift();

//Remover um item pela posição do indice
//frutas.splice(pos, n);
//A partir da posição (pos) em direção ao fim do array
//(n) define o numero de itens a se remover
frutas.splice(2, 2);

//Ler o array
frutas.forEach(function(item, indice, array){
		//console.log(item, indice);
document.write(indice, item + "<br>");
});