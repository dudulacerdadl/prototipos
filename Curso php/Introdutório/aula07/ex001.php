<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="../Estilo/estilo.css">
</head>
<body>
    <div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
    echo "Os valores passados foram $n1 e $n2 <br/>";
    echo "O resultado será $r";
    ?>
    </div>
</body>
</html>