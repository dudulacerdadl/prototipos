<?php
    $banco = "mysql:host=127.0.0.1;port=3306;dbname=smartclepius;charset=utf8";
    $usuario = "root";
    $senha = "";
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, Accept, Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"); 
    try {
        if($_SERVER['REQUEST_METHOD'] == "PUT"){
            $contato = json_decode(file_get_contents('php://input'), true);
            if (isset($contato["id"]) === true){
                $con = new PDO($banco, $usuario, $senha);
                $sql = "UPDATE responsavel SET nome=?, rg=?, cpf=?, endereco=?, telefone=?, email=?, senha=?";
                $sql .= " WHERE id=?";
                $comando = $con-> prepare($sql);
                $comando -> execute([
                    $contato["nome"],
                    $contato["rg"],
                    $contato["cpf"],
                    $contato["endereco"],
                    $contato["telefone"],
                    $contato["email"],
                    $contato["senha"]
                ]);

                http_response_code(200);
                echo ('{"id":'.$contato["id"].'}');
            } else {
                http_response_code(405); 
                echo('{ "message": "'.$_SERVER['REQUEST_METHOD'].'"}'); 
            }
        } else {
            if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
                http_response_code(200);
            } else {
                http_response_code(406);
                echo('{ "message2": "'.$_SERVER['REQUEST_METHOD'].'"}'); 
            }
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo '{"ERROR:":"' . $e-> getMessage() . '"}';
    }
?>