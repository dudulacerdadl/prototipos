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
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "PhP");
        print "A string foi encontrada na posição $pos";
        ?>
    </div>
</body>
</html>