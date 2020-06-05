<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 02</title>
</head>
<body>
    <div>
        <form action="ex002.php" method="get">
            <?php
            $i = 1;
            while ($i <= 5){
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = $_GET[$url] ?? 0;
                $i ++;
            }

            $i = 1;
            while ($i <= 5){
                $v = "num" . $i;
                echo "Valor $i : " . $$v . "<br/>";
                $i ++;
            }
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </form>
    </div>
</body>
</html>