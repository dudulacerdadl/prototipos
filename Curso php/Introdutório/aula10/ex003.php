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
        $est = $_GET["est"] ?? null;
        switch ($est){
            case ($est == "DF"):
            case ($est == "GO"):
            case ($est == "MT"):
            case ($est == "MS"):
                $reg = "Centro-Oeste";
            break;
            case ($est == "AL"):
            case ($est == "BA"):
            case ($est == "CE"):
            case ($est == "MA"):
            case ($est == "PB"):
            case ($est == "PE"):
            case ($est == "PI"):
            case ($est == "RN"):
            case ($est == "SE"):
                $reg = "Nordeste";
            break;
            case ($est == "AC"):
            case ($est == "AP"):
            case ($est == "AM"):
            case ($est == "PA"):
            case ($est == "RO"):
            case ($est == "RR"):
            case ($est == "TO"):
                $reg = "Norte";
            break;
            case ($est == "ES"):
            case ($est == "MG"):
            case ($est == "SP"):
            case ($est == "RJ"):
                $reg = "Sudeste";
            break;
            case ($est == "PR"):
            case ($est == "RS"):
            case ($est == "SC"):
                $reg = "Sul";
            break;
            default:
            $reg = "[ERRO]";
        }
        echo "Você mora na Região $reg";
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>