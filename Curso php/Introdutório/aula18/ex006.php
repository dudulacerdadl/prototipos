<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 06</title>
</head>
<body>
    <div>
    <pre>
        <?php
        $m = array(
            array(6,4),
            array(4,9),
            array(3,2)
        );
        $m[0][1] = $m[2][0];
        print_r($m);
        ?>
    </div>
    </pre>
</body>
</html>