<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 05</title>
</head>
<body>
    <div>
    <pre>
        <?php
        $v = array(
            "nome" => "Ana",
            "idade" => 23,
            "peso" => 65.5
        );
        foreach($v as $k => $c){
            print "O campo $k possui o conteúdo $c<br/>";
        }
        ?>
    </div>
    </pre>
</body>
</html>