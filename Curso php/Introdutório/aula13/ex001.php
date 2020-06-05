<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 01</title>
</head>
<body>
    <div>
        <?php
        echo "<h2>Contagem Progressiva</h2><br/>";
        for ($i = 1; $i <= 10; $i++){
            echo "$i ";
        }
        echo "<br/><h2>Contagem Regressiva</h2><br/>";
        for ($i = 10; $i >=1; $i--){
            echo "$i ";
        }
        echo "<br/><h2>Contagem Até 100 de 5 em 5</h2><br/>";
        for ($i = 0; $i <=100; $i += 5){
            echo "$i ";
        }
        echo "<br/><h2>Contagem de 30 até 0 de 2 em 2</h2><br/>";
        for ($i = 30; $i >= 0; $i -= 2){
            print "$i ";
        }
        ?>
    </div>
</body>
</html>