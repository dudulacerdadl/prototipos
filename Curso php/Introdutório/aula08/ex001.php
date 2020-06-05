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
        $valor = $_GET["v"];
        $rq = sqrt ($valor);
        echo "A raiz de $valor é igual à " . number_format($rq, 2, ",", ".");
        ?>
        <a href="ex001.html">Voltar</a>
    </div>
</body>
</html>