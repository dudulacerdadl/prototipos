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
        $nome = $_GET["nome"] ?? "[Não informado]";
        $ano = $_GET["ano"] ?? 0;
        $sexo = $_GET["sexo"] ?? "[Sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome, que é $sexo, nasceu em $ano e tem $idade anos";
        ?>
        <a href="ex002.html">Voltar</a>
    </div>
</body>
</html>