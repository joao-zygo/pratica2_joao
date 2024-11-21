<?php
require_once "../database.php";
$method = $_SERVER['REQUEST_METHOD'];
$solicitacao = [];

if ($method === 'GET') {
    global $solicitacao;
    $filter = 0;
    if (isset($_GET["filter"])) {
        $filter = $_GET["filter"];
    }

    $solicitacao = Database::listar('solicidacao', $filter);

    require_once "read.php";
}

if ($method === 'DELETE') {
    if (isset($_GET["id"])) {
        global $solicitacao;
        $id = $_GET["id"];

        Database::deletar('solicidacao', $id);
        $solicitacao = Database::listar('solicidacao', 0);
        
        require_once "read.php";
    }
}

if ($method === 'POST') {
    if (
        isset($_POST["id_cliente"]) &&
        isset($_POST["id_colaborador"]) &&
        isset($_POST["data_abertura"]) &&
        isset($_POST["status"]) &&
        isset($_POST["urgencia"]) &&
        isset($_POST["descricao"])
    ) {
        try {

            global $solicitacao;
            Database::criar('solicidacao', $_POST);

            echo "<p>Sucesso!</p>";
        } catch(Error $err) {
            echo "<p>Erro</p>";
        }
    } else {
        echo "<p>Dados invalidos</p>";
    }
}

if ($method === 'PUT') {
    if (
        isset($_POST["id_cliente"]) &&
        isset($_POST["id_colaborador"]) &&
        isset($_POST["data_abertura"]) &&
        isset($_POST["status"]) &&
        isset($_POST["urgencia"]) &&
        isset($_POST["descricao"])
    ) {
        try {
            global $solicitacao;
            Database::criar('solicidacao', $_GET);
            
            echo "<p>Sucesso!</p>";
        } catch (Error $err) {
            echo "<p>Erro!</p>";
        }
    } else {
        echo "<p>Dados invalidos</p>";
    }
}