<?php
function getAllClientes() {
    $db = DB::connect();
    $query = $db->prepare("SELECT * FROM clientes");
    $query->execute();
    $responseObject = $query->fetchAll(PDO::FETCH_ASSOC);

    if($responseObject) {
        echo json_encode(["dados" => $responseObject]);
    } else {
        echo json_encode(["dados" => 'Nenhum cadastro encontrado']);
        http_response_code(404);
    }
}
