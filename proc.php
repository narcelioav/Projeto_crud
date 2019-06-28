<?php

	session_start();
	
	include_once("conexao.php");

	//$descricao = $_POST['descricao'];
	//$quantidade = $_POST['quantidade'];
	//$valor = $_POST['valor'];
	$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_INT);

	$result = "INSERT INTO produtos (descricao, quantidade, valor) 
	VALUES ('$descricao', '$quantidade', '$valor')";

	$resultado = mysqli_query($conn, $result);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<span style='color:green'>Cadastrado com sucesso!</span>";
		header("Location: /teste-selecao/listar.php");	
	}else{
		$_SESSION['msg'] = "<span style='color:red'>Não Cadastrado com sucesso!</span>";
		header("Location: /teste-selecao/inserir.php");
	}

?>