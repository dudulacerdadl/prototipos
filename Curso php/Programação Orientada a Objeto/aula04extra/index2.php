<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Teste</title>
</head>
<body>
    <div class="centro">
    <?php
    require_once 'Conta.php';
    $nome = $_GET["nome"] ?? "[ERRO]";
    $conta = $_GET["conta"] ?? 0;

    $c = new Conta($conta, $nome);

    print "<h1 class = 'titulo'>Bem-Vindo {$c -> getTitular()}</h1>";
    print "<h3 class = 'titulo'>Sua conta é {$c -> getNumero()}</h3><br/>";
    ?>
    <form action="escolha.php" method="get">
        <fieldset><legend>Escola uma opção:</legend>
            <input type="radio" name="opcao" value="1" id="op1" checked>
            <label for="op1">Consular</label>
            <br/>
            <input type="radio" name="opcao" value="2" id="op2">
            <label for="op2">Corrigir titular</label>
            <br/>
            <input type="radio" name="opcao" value="3" id="op3">
            <label for="op3">Depósito</label>
            <br/>
            <input type="radio" name="opcao" value="4" id="op4">
            <label for="op4">Saque</label>
        </fieldset>
        <div class="div-botao"><input class="botao" type="submit" value="Selecionar"></div>
    </form>

    <br/></br><a class="botao" href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>