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
        $num = $_GET["num"] ?? 1;
        $total = 0;
        print "<h2>Analisando o número $num</h2><br/>";
        print "Valores múltiplos: ";
        for ($i = 1; $i <= $num; $i ++){
            $res = $num / $i;
            if ($num % $i == 0){
                $multi = $i;
                $total ++;
                print "$multi ";
            }
        }
        print "<br/>Total de múltiplos: $total<br/>";
        print "<h3>Resultado: $num ";
        if ($total > 2){
            print "NÃO É PRIMO</h3>";
        } else {
            print "É PRIMO</h3>";
        }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>