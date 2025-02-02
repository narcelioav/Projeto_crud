var nota = 2;

document.getElementById("formNota").addEventListener("submit", function (event) {
	event.preventDefault(); // Evita o recarregamento da página

	let inputValor = parseFloat(document.getElementById("inputNota").value);

	if (!isNaN(inputValor)) {
		nota = inputValor; // Atualiza a variável com o valor inserido

		let mensagem = `Nota: ${nota.toFixed(1)} - `;

		if (nota >= 7) {
			mensagem += " Aluno Aprovado ✅";
		} else if ((nota < 7) && (nota >= 4)) {
			mensagem += " Aluno em Recuperação ⚠️";
		} else {
			mensagem += " Aluno Reprovado ❌";
		}

		// Exibe o resultado e esconde o formulário
		document.getElementById("resultado").innerText = mensagem;
		document.getElementById("formNota").style.display = "none";
		document.getElementById("reiniciar").style.display = "block"; // Mostra botão de reinício
	} else {
		document.getElementById("resultado").innerText = "Por favor, insira um valor válido.";
	}
});

function reiniciarFormulario() {
	document.getElementById("formNota").style.display = "block";
	document.getElementById("reiniciar").style.display = "none";
	document.getElementById("resultado").innerText = "";
	document.getElementById("inputNota").value = "";
}