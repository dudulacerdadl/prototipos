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

        $a[0] = new Mamifero(80, 15, 4, "Preto");
        $a[1] = new Reptil(30, 80, 4, "Verde");
        $a[2] = new Peixe(0.2, 3, 0, "Vermelho");
        $a[3] = new Ave(10, 12, 2, "Amarelo");
        $a[4] = new Canguru(60, 30, 4, "Caramelo");
        $a[5] = new Cachorro(15, 1, 4, "Marrom");
        $a[6] = new Cobra(0.75, 0.5, 0, "Verde");
        $a[7] = new Tartaruga(30, 110, 4, "Verde-escuro");
        $a[8] = new Goldfish(0.2, 3, 0, "Dourado");
        $a[9] = new Arara(1.5, 10, 2, "Azul");

        $a[2] -> soltarBolha();
        $a[2] -> emitirSom();
        $a[3] -> fazerNinho();
        $a[4] -> locomover();
        $a[5] -> abanarRabo();

        echo "</br><p><pre>";
        print_r($a);
        echo "</pre></p>"

        ?>
    </div>
</body>
</html>