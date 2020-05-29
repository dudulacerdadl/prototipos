<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="../Estilo/estilo.css">
</head>
<body>
    <div>
    <?php
    $ano = $_GET["ano"];
    echo "Estamos em $ano, e ano passado foi " . (-- $ano);
    ?>
    </div>
</body>
</html>