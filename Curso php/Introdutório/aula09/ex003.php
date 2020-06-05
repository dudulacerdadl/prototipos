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
        $nota1 = $_GET["nota1"] ?? 0;
        $nota2 = $_GET["nota2"] ?? 0;
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $media.<br/>";
        if ($media < 5) {
            $situação = "REPROVADO";
        } elseif ($media >= 7) {
            $situação = "APROVADO";
        } else {
            $situação = "RECUPERAÇÃO";
        }
        echo "Situação do aluno: $situação";
        ?>
        <a href="ex003.html">Voltar</a>
    </div>
</body>

</html>