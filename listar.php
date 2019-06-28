<?php

session_start();
include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
	</head>
	<body>
			<a href="/teste-selecao/inserir.php">Cadastrar</a>
		
		<?php
			echo "<h1>Listar Produtos</h1>";
			if(isset($_SESSION['msg'])){
				echo "<p>" . $_SESSION['msg'] . "</p>";
				unset($_SESSION['msg']);
			}
			
			$result = "SELECT * FROM produtos";
			
			$resultado = mysqli_query($conn, $result);
			
			while($row = mysqli_fetch_assoc($resultado)){
				echo "ID: " . $row['id'] . "<br>";
				echo "Descrição: " . $row['descricao'] . "<br>";
				echo "Quantidade: " . $row['quantidade'] . "<br>";
				echo "Valor: " . $row['valor'] . "<br>";
				echo "<a href='/teste-selecao/editar.php?id=" . $row['id'] . "'>Editar</a><br>";
				echo "<a href='/teste-selecao/apagar.php?id=" . $row['id'] . "'>Apagar</a><br><hr>";
			}
		?>
	</body>		
</html>