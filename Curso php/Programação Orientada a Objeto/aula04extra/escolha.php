<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Teste</title>
</head>
<body>
    <div class="centro">
        <?php
        $opcao = $_GET["opcao"] ?? 1;

        switch ($opcao){
            case 1:
                print "Teste 1";
            break;
            case 2:
                print "Teste 2";
            break;
            case 3:
                print "Teste 3";
            break;
            case 4:
                print "Teste 4";
            break;
        }
        ?>
        <br/></br><a class="botao" href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>