var tipo = 0;

document.getElementById("formTipo").addEventListener("submit", function (event) {
	event.preventDefault(); // Evita o recarregamento da página

	let inputValor = parseFloat(document.getElementById("inputTipo").value);

	if (!isNaN(inputValor)) {
		tipo = inputValor; // Atualiza a variável com o valor inserido

		let mensagem = `Tipo: ${tipo.toFixed(1)} - `; //toFixed(1), exibir casas decimais.

		switch (tipo) {
			case 1:
				mensagem += " Apartamento ✅";
				break;
			case 2:
				mensagem += " Casa ✅";
				break;
			case 3:
				mensagem += " Sala Comercial ✅";
				break;
			case 4:
				mensagem += " Sobrado ✅";
				break;
			default:
				mensagem += " A chave não corresponde a nenhum tipo de imovel! ❌";
		}

		// Exibe o resultado e esconde o formulário
		document.getElementById("resultado").innerText = mensagem;
		document.getElementById("formTipo").style.display = "none";
		document.getElementById("reiniciar").style.display = "block"; // Mostra botão de reinício
	} else {
		document.getElementById("resultado").innerText = "Por favor, insira um valor válido.";
	}
});

function reiniciarFormulario() {
	document.getElementById("formTipo").style.display = "block";
	document.getElementById("reiniciar").style.display = "none";
	document.getElementById("resultado").innerText = "";
	document.getElementById("inputTipo").value = "";
}