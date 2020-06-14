<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="centro">
        <?php
        function includes(){
            foreach(glob('includes/*.php') as $arquivo){
                require_once $arquivo;
            }
        }

        includes();

        $a[0] = new Mamifero();
        $a[1] = new Lobo();
        $a[2] = new Cachorro();

        $a[0] -> emitirSom();
        $a[1] -> emitirSom();
        $a[2] -> emitirSom();
        $a[2] -> reagirFrase("Olá");
        $a[2] -> reagirFrase("Vai apanhar");
        $a[2] -> reagirHora(11, 45);
        $a[2] -> reagirHora(21, 00);
        $a[2] -> reagirDono(true);
        $a[2] -> reagirDono(false);
        $a[2] -> reagirIdade(2, 12.5);
        $a[2] -> reagirIdade(17, 4.5);

        ?>
    </div>
</body>
</html>