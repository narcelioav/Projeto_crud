<?php  

    include_once 'conexao.php';

    echo "<h1>Listar os usuarios - mysqli_fetch_assoc</h1>";

    //$query_usuarios = "SELECT * FROM usuarios";
    $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 0";
    //OFFSET trabalha com paginação, retorna apartir do registro informado, caso seja maior que o numero de registros do banco de dados, não retornara nada. O primeiro registro é "0"
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";
        /* echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "E-mail: " . $row_usuario['email'] . "<br>";
        echo "<hr>";*/
        
        //Optimizando o codigo
        extract($row_usuario);
        //Extract imprime atraves do nome da coluna
         
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }
    
    echo "<h1>Listar os usuarios - mysqli_fetch_row</h1>";

    $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 0";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    //while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        while($row_usuario = mysqli_fetch_row($result_usuarios)){
        //row informa a posição do array
            echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";            
             
            echo "ID: " . $row_usuario[0] . "<br>";
            echo "Nome: " . $row_usuario[1] . "<br>";
            echo "E-mail: " . $row_usuario[2] . "<br>";
            echo "<hr>";
        }

    echo "<h1>Listar os usuarios - mysqli_fetch_array</h1>";
        //Não é recomendado usar array, pois gera registros duplicados
    $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 0";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        
        extract($row_usuario);
       
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }

    $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 0";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_row($result_usuarios)){
             
        echo "ID: " . $row_usuario[0] . "<br>";
        echo "Nome: " . $row_usuario[1] . "<br>";
        echo "E-mail: " . $row_usuario[2] . "<br>";
        echo "<hr>";
    }
    
?>