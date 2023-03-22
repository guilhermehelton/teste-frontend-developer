<?php
function createMessageCliente(){
    // Defino o body da requisição para receber um JSON
    $body = json_decode(file_get_contents('php://input'), true);

    $sql = "INSERT INTO clientes (nome, email, tel, mensagem) VALUES (";

    // Verifica se a quantidade de campos foi passado corretamente
    if(count(array_values($body)) != 4) {
        echo json_encode(["dados" => "Bad Request"]);
        http_response_code(400);
        exit;
    }

    // Adicionar os valores passados na requisição para o SQL
    $bodyValues = "'".implode("', '", array_values($body))."'";
    $sql .= $bodyValues.");";
    
    // Executa o sql no banco de dados
    $db = DB::connect();
    $query = $db->prepare($sql);
    $queryResponse = $query->execute();

    if($queryResponse){
        echo json_encode(["dados" => "Mensagem inserida com sucesso."]);
        http_response_code(200);
    } else {
        echo json_encode(["dados" => "House um erro ao adicionar a mensagem"]);
        http_response_code(500);
    }
}