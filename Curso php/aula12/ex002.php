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
        $v = $_GET["val"] ?? 1;
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c --;
        } while ($c >= 1);
        echo "<h1>O Fatorial de $v</h1><br/>";
        echo "<h2>$v! = $fat</h2>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>