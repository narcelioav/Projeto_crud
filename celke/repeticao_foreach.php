<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Repetição - Foreach</title>
</head>
<body>
    <?php

        //Comando de repetição
        $alunos = ["A","S","D","F"];
        var_dump($alunos);

        foreach($alunos as $aluno){
            echo "Nome: $aluno <br><br>";            
        }
    ?>
</body>
</html>