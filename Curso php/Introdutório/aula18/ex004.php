<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 04</title>
</head>
<body>
    <div>
    <pre>
        <?php
        $v = array(
            3 => 5,
            1 => 9,
            0 => 8,
            7 => 7
        );
        unset($v[0]);
        print_r($v);
        ?>
    </div>
    </pre>
</body>
</html>