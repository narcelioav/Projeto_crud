<?php

session_start();
include_once("conexao.php");
//$id = $_GET['id'];
//echo $id;
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM produtos WHERE id='$id' LIMIT 1";
$resultado = mysqli_query($conn, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar</title>
	</head>
	<body>
		<a href="/teste-selecao/listar.php">Listar</a>
		<h1>Editar Produtos</h1>
		<?php
		if(isset($_SESSION['msg'])){
				echo "<p>" . $_SESSION['msg'] . "</p>";
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="proc2.php">
			<label>Descrição: </label>
			<input type="text" name="descricao" value="<?php echo $row['descricao'];?>"><br><br>
			<label>Quantidade: </label>
			<input type="number" name="quantidade" value="<?php echo $row['quantidade'];?>"><br><br>
			<label>Valor: </label>
			<input type="number" name="valor" value="<?php echo $row['valor'];?>"><br><br>
			
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			
			<input type="submit" value="Editar"><br><br>
		</form>	
	</body>		
</html>