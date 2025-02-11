document.write("<h2>Objeto cadeira</h2>");

var cadeira = {
			cor: "Preta",
			altura: "118",
			largura: "74",
			profundidade: "64",
		};

                document.write("Cor da cadeira: " + cadeira.cor + "<br>");
                document.write("Altura da cadeira: " + cadeira.altura + "<br>");

		cadeira.cor = "Branca";
                document.write("Cor da cadeira: " + cadeira.cor + "<br>");
		cadeira.peso = 17;
                document.write("Peso da cadeira: " + cadeira.peso + "<br>");

                document.write("Profundidade da cadeira: " + cadeira.profundidade + "<br>");
		delete cadeira.profundidade;
		document.write("Profundidade da cadeira: " + cadeira.profundidade + "<br><hr>");

                