<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Ver Vídeo</title>
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

        $p[0] = new Gafanhoto("Eduardo", 20, "Masculino", "DuduLacerda");
        $p[1] = new Gafanhoto("Maria", 18, "Feminino", "VazMF");
        $v[0] = new Video("Aula de PHP");
        $v[0] -> like("like");
        $v[0] -> like("like");
        $v[0] -> like("deslike");
        $v[0] -> play();
        $v[0] -> pause();

        $p[0] -> viuMaisUm();

        $vis[0] = new Visualizacao($p[0], $v[0]);
        $vis[0] -> avaliar();
        $vis[0] -> avaliarNota(7);
        $vis[0] -> avaliarPorc(80);

        echo "</br><p><pre>";
        print_r($p);
        echo "</pre></p>";
        echo "</br><p><pre>";
        print_r($v);
        echo "</pre></p>";
        echo "</br><p><pre>";
        print_r($vis);
        echo "</pre></p>";

        ?>
    </div>
</body>
</html>