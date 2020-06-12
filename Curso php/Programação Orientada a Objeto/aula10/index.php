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
        require_once "Aluno.php";
        require_once "Funcionario.php";
        require_once "Professor.php";

        $p[0] = new Aluno("Eduardo", 20, "Masculino", "Engenharia de Software");
        $p[1] = new Professor("Maria Fernanda", 18, "Feminino");
        $p[2] = new Pessoa("Ana Kataoka", 17, "Feminino");

        echo "<p><pre>";
        print_r($p);
        echo "</pre></p>"
        ?>
    </div>
</body>
</html>