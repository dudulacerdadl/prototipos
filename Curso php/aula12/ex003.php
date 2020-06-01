<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 03</title>
</head>
<body>
    <div>
        <?php
        $num = $_GET["numtab"] ?? 1;
        $vezes = 0;
        echo "<h1>Tabuada do $num</h1><br/>";
        do {
            $res = $num * $vezes;
            echo "$num X $vezes = $res<br/>";
            $vezes ++;
        } while ($vezes <= 10);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>