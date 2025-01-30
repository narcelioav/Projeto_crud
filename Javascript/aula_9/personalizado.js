function validar() {
	alert("Login ou senha incorreto");
}

function somar(a, b) {
var total = a + b;
	alert("Valor da soma: " + total);
}

function desconto(a, b) {
var totaldesc = a - b;
//imprimindo dentro da função.
	document.write("Valor total com desconto: " + totaldesc + "<br><br>");
}
desconto(97, 15);


function desconto2(a, b) {
var totalDesc = a - b;
return totalDesc;
//retornando o valor.
	//document.write("Valor total com desconto: " + totalDesc + "<br><br>");
}
var result = desconto2(92, 15);
document.write("Valor total com desconto: " + result + "<br><br>");