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
        $t = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, molestias quasi expedita quo omnis quas repellat corporis tenetur perferendis quisquam ex distinctio ratione consequuntur, necessitatibus repudiandae quibusdam repellendus labore consectetur!";
        $r = wordwrap($t, 20, "<br/>\n", true);
        print $r;
        ?>
    </div>
</body>
</html>