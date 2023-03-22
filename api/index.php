<?php
define("ROOT_PATH", dirname(__FILE__));

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

date_default_timezone_set("America/Sao_Paulo");

include_once(ROOT_PATH . "/classes/db.php");
include_once(ROOT_PATH . "/endpoints/get.clientes.php");
include_once(ROOT_PATH . "/endpoints/post.clientes.php");

if(isset($_GET["path"])) {
    $path = explode("/", $_GET["path"]);
} else {
    echo "Rota não encontrada";
    exit;
}

if(isset($path[0])) { $action = $path[0]; } else { $action = ""; }

$method = $_SERVER["REQUEST_METHOD"];

// Realiza o GET de todas as mensagens dos clientes
if($method == "GET" && $action == "clientes") {
    getAllClientes();
} 
// Realiza o POST de uma nova mensagem do cliente 
else if ($method == "POST" && $action == "clientes") {
    createMessageCliente();
}