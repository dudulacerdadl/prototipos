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
        function teste(&$x){
            $x += 2;
            print "O valor de X é $x<br/>";
        }

        $a = 3;
        teste($a);
        print "<p>O valor de A é $a</p>"
        ?>
    </div>
</body>
</html>