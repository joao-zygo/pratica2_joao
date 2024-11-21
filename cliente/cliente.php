<?php
require_once "../database.php";
$method = $_SERVER['REQUEST_METHOD'];
$cliente = [];

if ($method === 'GET') {
    global $cliente;
    $cliente = Database::listar('cliente', 0);

    require_once "read.php";
}

if ($method === 'DELETE') {
    if (isset($_GET["id"])) {
        global $cliente;
        $id = $_GET["id"];

        Database::deletar('cliente', $id);
        $cliente = Database::listar('cliente', 0);
        
        require_once "read.php";
    }
}

if ($method === 'POST') {
    if (
        isset($_POST["nome"]) &&
        isset($_POST["cpf"]) &&
        isset($_POST["email"]) &&
        isset($_POST["telefone"])
    ) {
        try {

            global $cliente;
            Database::criar('cliente', $_POST);

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
        isset($_GET["nome"]) &&
        isset($_GET["cpf"]) &&
        isset($_GET["email"]) &&
        isset($_GET["telefone"])
    ) {
        try {

            global $cliente;
            Database::criar('cliente', $_GET);
            
            echo "<p>Sucesso!</p>";
        } catch (Error $err) {
            echo "<p>Erro!</p>";
        }
    } else {
        echo "<p>Dados invalidos</p>";
    }
}