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
        
        <?php
        $frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, molestias quasi expedita quo omnis quas repellat corporis tenetur perferendis quisquam ex distinctio ratione consequuntur, necessitatibus repudiandae quibusdam repellendus labore consectetur!";
        $cont = str_word_count($frase, 0);
        print $cont;
        ?>
    </div>
</body>
</html>