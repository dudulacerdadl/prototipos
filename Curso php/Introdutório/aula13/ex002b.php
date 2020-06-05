<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 02</title>
</head>
<body>
    <div>
        <?php
        $num = $_GET["numtab"] ?? 1;
        print "<h1>Tabuada do $num</h1><br/>";
        for ($i = 1; $i <= 10; $i ++){
            print "$num X $i = " . ($num * $i) . "<br/>";
        }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>