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
        $n = $_GET["num"] ?? 0;
        $op = $_GET["oper"] ?? 2;
        switch ($op){
            case 1:
                $r = $n * 2;
            break;
            case 2:
                $r = pow($n, 3);
            break;
            case 3:
                $r = sqrt($n);
            break;
        }
        echo "O resultado da operação solicitada foi $r";
        ?>
        <br/>
        <a href="ex001.html">Voltar</a>
    </div>
</body>
</html>