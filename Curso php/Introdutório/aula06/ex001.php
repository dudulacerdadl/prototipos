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
    $prod = $_GET["prod"];
    $desc = $prod * (10/100);
    echo "O produto, que custava R$" . number_format($prod, 2, ",", ".") . " está saido por R$" . number_format(($prod -= $desc), 2, ",", ".") . " com 10% de desconto!";
    ?>
    </div>
</body>
</html>