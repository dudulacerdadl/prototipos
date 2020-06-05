<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <?php
    $txt = $_GET["t"] ?? "[Texto Genérico]";
    $tam = $_GET["tam"] ?? "12pt";
    $cor = $_GET["cor"] ?? "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Exercício 01</title>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$txt</span>"
        ?>
        <a href="ex003.html">Voltar</a>
    </div>
</body>
</html>