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
        
        <?php
        $frase = "Gosto de estudar PHP!!!";
        $novaFrsase = str_replace("PHP", "JavaScript", $frase);
        print $novaFrsase;
        ?>
    </div>
</body>
</html>