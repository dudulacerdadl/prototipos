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
        <?php
        $a = $_GET["ano"] ?? 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos <br/>";
        if ($i < 16) {
            $tipoVoto = "não vota";
        } elseif ($i >= 18 && $i < 70) {
            $tipoVoto = "tem voto obrigatório";
        } else {
            $tipoVoto = "tem voto opcional";
        }
        echo "Para essa idade, você $tipoVoto"
        ?>
        <a href="ex002.html">Voltar</a>
    </div>
</body>

</html>