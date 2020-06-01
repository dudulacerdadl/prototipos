<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 01</title>
</head>
<body>
    <div>
        <?php
        $a = $_GET["ano"] ?? 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos <br/>";
        if($i >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade, você $v e também $d!";
        ?>
        <a href="ex001.html">Voltar</a>
    </div>
</body>
</html>