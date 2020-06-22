<?php
    $banco = "mysql:host=127.0.0.1;port=3306;dbname=smartclepius;charset=utf8";
    $usuario = "root";
    $senha = "";
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    try {
        if (isset($_GET['id']) === true){
            $con = new PDO($banco, $usuario, $senha);
            $sql = "SELECT * FROM responsavel";
            $sql .= " where id = {$_GET['id']} limit 1";
            $dados = $con-> query($sql);
            $obj = $dados-> fetchAll(PDO::FETCH_ASSOC)[0];
            $resp = json_encode($obj);
            echo ($resp);
        } else {
            http_response_code(405);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo '{"ERROR:":"' . $e-> getMessage() . '"}';
    }
?>