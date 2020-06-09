<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Controle Remoto</title>
</head>
<body>
    <div class="centro">
    <h1>Projeto Controle Remoto</h1>
    <?php
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c -> ligar();
    $c -> maisVolume();
    $c -> maisVolume();
    $c -> maisVolume();
    $c -> maisVolume();
    $c -> menosVolume();
    $c -> abrirMenu();
    $c -> fecharMenu();

    print "<br/><br/><pre>";
    print_r($c);
    print "</pre>";
    ?>
    </div>
    </pre>
</body>
</html>