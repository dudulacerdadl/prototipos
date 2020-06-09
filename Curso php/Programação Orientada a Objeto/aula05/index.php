<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Aula 05</title>
</head>
<body>
    <div class="centro">
        <pre>
        <?php
        require_once 'Conta.php';

        $c1 = new Conta();
        $c2 = new Conta();

        $c1 -> abrirConta("CC", "Dudu");
        $c1 -> depositar(300);
        $c2 -> abrirConta("CP", "Maria");
        $c2 -> depositar(500);

        print_r($c1);
        print_r($c2);

        $c2 -> sacar(100);

        $c1 -> pagarMensal();
        $c2 -> pagarMensal();

        print_r($c1);
        print_r($c2);

        $c1 -> sacar(338);
        $c2 -> sacar(530);
        $c1 -> fecharConta();
        $c2 -> fecharConta();

        print_r($c1);
        print_r($c2);
        ?>
        </pre>
    </div>
</body>
</html>