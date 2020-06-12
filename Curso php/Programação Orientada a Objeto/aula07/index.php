<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Ultra Emoji Combat</title>
</head>
<body>
    <div class="centro">
        <h1>Ultra Emoji Combat</h1>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $lut[0] = new Lutador("Prety Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $lut[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lut[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lut[3] = new Lutador("Dead Code", "Atustrália", 28, 1.93, 81.6, 13, 0, 2);
        $lut[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lut[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $uec = new Luta();
        $uec -> marcarLuta($lut[0], $lut[1]);
        $uec -> lutar();
        
        /*print "<br/><pre>";
        print_r($lut);
        print "</pre><br/>";

        $lut[0] -> apresentar();
        $lut[2] -> status();
        $lut[1] -> ganharLuta();
        $lut[0] -> empatarLuta();

        print "<br/><pre>";
        print_r($lut);
        print "</pre><br/>";*/

        ?>
    </div>
</body>
</html>