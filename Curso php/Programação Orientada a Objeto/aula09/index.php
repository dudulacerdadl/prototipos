<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Leitor</title>
</head>
<body>
    <div class="centro">
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $liv = new Livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 250);
        $user = new Pessoa("Eduardo", 20, "Masculino");

        $liv -> setLeitor($user);
        $liv -> detalhes();

        ?>
    </div>
</body>
</html>