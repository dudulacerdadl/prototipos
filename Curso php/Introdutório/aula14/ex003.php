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
        function soma (){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i = 0; $i < $t; $i ++){
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma(3, 5, 2, 8, 9, 4);
        print "A soma dos valores é $r"
        ?>
    </div>
</body>
</html>