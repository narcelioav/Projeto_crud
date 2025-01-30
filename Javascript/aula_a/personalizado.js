var nota = 2;

if(nota >= 7) {
	document.write("Aprovado: " + nota + "<br>");
}else if((nota < 7) && (nota >= 4)){
	document.write("Recuperação: " + nota + "<br>");
}else{
	document.write("Reprovado: " + nota + "<br>");
}