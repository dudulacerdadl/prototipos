<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API SmartClepius</title>
</head>
<body>
<h1>API</h1>
    <?php
    $banco = "mysql:host=127.0.0.1;port=3306;dbname=agenda";
    $usuario = "root";
    $senha = "";
    try {
        $con = new PDO($banco, $usuario, $senha);
        $sql = "select * from contatos";
        $dados = $con -> query($sql);
        foreach ($dados as $item => $valor){
            echo "<pre>";
            print_r($valor);
            echo "</pre>";
        }

    } catch (PDOException $e) {
        echo 'ERROR:' . $e -> getMessage();
    }

    ?>
</body>
</html>