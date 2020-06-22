<?php
    $banco = "mysql:host=127.0.0.1;port=3306;dbname=agenda;charset=utf8";
    $usuario = "root";
    $senha = "";
    try {
        $con = new PDO($banco, $usuario, $senha);
        $sql = "select * from contatos";
        if (isset($_GET['pesq'])){
            $sql .= "where nome like '%{$_GET['pesq']}%'";
        }
        $dados = $con->query($sql);
        foreach ($dados as $item => $valor){
                echo "<pre>";
                print_r($valor["nome"]);
                echo "</pre>";
            }
    } catch (PDOException $e) {
        echo 'ERROR:' . $e->getMessage();
    }
?>