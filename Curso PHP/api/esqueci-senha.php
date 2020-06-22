<?php
    $banco = "mysql:host=127.0.0.1;port=3306;dbname=smartclepius;charset=utf8";
    $usuario = "root";
    $senha = "";
    try {
        $con = new PDO($banco, $usuario, $senha);
        if (isset($_GET['cpf']) == true){
            $sql = "SELECT cpf FROM responsavel WHERE cpf = '{$_GET['cpf']}'";
        }
        $dados = $con-> query($sql);
        $resp = json_encode($dados-> fetchAll(PDO::FETCH_ASSOC));
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");
        echo ($resp);
    } catch (PDOException $e) {
        echo 'ERROR:' . $e-> getMessage();
    }
?>