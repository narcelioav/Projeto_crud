//Aula 1 
// 
/*function alterarCont() {
    document.getElementById("exemplo").innerHTML = "Celke - Hello World!";
}*/

function alterarCont() {
    const paragrafo = document.getElementById("exemplo");
    const botao = document.getElementById("botao");

    if (paragrafo.innerHTML === "Conteudo") {
        paragrafo.innerHTML = "Celke - Hello World!";
        botao.textContent = "Desfazer";
    } else {
        paragrafo.innerHTML = "Conteudo";
        botao.textContent = "Alterar";
    }
}

// Adiciona o evento ao botão para executar a função
//document.getElementById("botao").addEventListener("click", alterarCont);
//A ação foi aplicada no html, com onClik, não necessita do defer no script.