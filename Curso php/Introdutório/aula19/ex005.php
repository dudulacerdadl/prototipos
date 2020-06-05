<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 05</title>
</head>
<body>
    <div>
    <pre>
        <?php
        $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
        print_r($v);
        ksort($v);
        print_r($v);
        ?>
    </div>
    </pre>
</body>
</html>