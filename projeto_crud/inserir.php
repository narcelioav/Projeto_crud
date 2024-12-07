<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
	</head>
	<body>
		<a href="/teste-selecao/listar.php">Listar</a>
		<h1>Cadastrar Produtos</h1>
		<?php
		if(isset($_SESSION['msg'])){
				echo "<p>" . $_SESSION['msg'] . "</p>";
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="proc.php">
			<label>Descrição: </label>
			<input type="text" name="descricao"><br><br>
			<label>Quantidade: </label>
			<input type="number" name="quantidade"><br><br>
			<label>Valor: </label>
			<input type="number" name="valor"><br><br>
			
			<input type="submit" value="Cadastrar"/>
		</form>		
	</body>
</html>