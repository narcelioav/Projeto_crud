<?php  

    include_once 'conexao_try_catch.php';

    try{

    //$query_usuarios = "SELECT * FROM usuarios";
    $query_usuarios = "SELECT id, nome, email FROM usuarios";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";
        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "E-mail: " . $row_usuario['email'] . "<br>";
        echo "<hr>";*/
        
        //Optimizando o codigo
        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";

    }
}catch (Exception $erro){
    echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado: " . $erro->getMessage();
}

?>