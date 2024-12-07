<?php

	session_start();	
	include_once("conexao.php");
	
	$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

	$result = "UPDATE produtos SET
	descricao='$descricao', 
	quantidade='$quantidade', 
	valor='$valor'
	WHERE id='$id'";

	$resultado = mysqli_query($conn, $result);

	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<span style='color:green'>Editado com sucesso!</span>";
		header("Location: /teste-selecao/listar.php");	
	}else{
		$_SESSION['msg'] = "<span style='color:red'>Não Editado com sucesso!</span>";
		header("Location: /teste-selecao/editar.php");
	}

?>