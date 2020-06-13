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
        require_once 'Visitante.php';
        require_once 'Professor.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';

        $p[0] = new Visitante("Vanessa", 20, "Feminino");
        $p[1] = new Professor("Ricardo", 36, "Masculino", 10000);
        $p[2] = new Aluno("Eduardo", 20, "Masculino", "Engenharia de Software");
        $p[3] = new Bolsista("Maria", 18, "Feminino", "Ciência da Computação", 100);
        $p[4] = new Tecnico("Ana", 17, "Feminino", "Ciência da Computação");

        $p[2] -> pagarMensalidade();
        $p[3] -> pagarMensalidade();

        echo "<p><pre>";
        print_r($p);
        echo "</pre></p>"

        ?>
    </div>
</body>
</html>