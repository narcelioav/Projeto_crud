<?php

	session_start();	
	include_once("conexao.php");
	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	$result = "DELETE FROM produtos WHERE id='$id'";

	$resultado = mysqli_query($conn, $result);

	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<span style='color:green'>Apagado com sucesso!</span>";
		header("Location: /teste-selecao/listar.php");	
	}else{
		$_SESSION['msg'] = "<span style='color:red'>Não Apagado com sucesso!</span>";
		header("Location: /teste-selecao/listar.php");
	}

?>