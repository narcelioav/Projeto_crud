<?php
    session_start();
    ob_start();

//dados do usuario que serão editados

$id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

//conexao com o banco de dados
include_once 'conexao.php';
    
$query_usuario = "DELETE FROM usuarios WHERE id = $id";
mysqli_query($conn, $query_usuario);

//se afetou aguma limha
if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color: green'>Usuario apagado com sucesso!</p>";
    //redirecionar para o listar
    header("location: 27-crud_lis.php");

    //redirecionar para o visualizar
    //header("location: 27-crud_vis.php?id_usuario=$id");
}else{
    $_SESSION['msg'] = "<p style='color: #f00'>Erro: Usuario não apagado com sucesso!</p>";     
    header("location: 27-crud_lis.php");  
}
