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
        <form action="ex002.php" method="get">
            <?php
            $ini = $_GET["ini"] ?? 0;
            $fim = $_GET["fim"] ?? 0;
            $inc = $_GET["inc"] ?? 0;
            if ($ini < $fim){
                while ($ini <= $fim){
                    echo "$ini ";
                    $ini += $inc;
                }
            } elseif ($ini > $fim){
                while ($ini >= $fim){
                    echo "$ini ";
                    $ini -= $inc;
                }
            } else {
                echo "$ini";
            }
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </form>
    </div>
</body>
</html>