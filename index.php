<?php
require_once 'Database.php';

// Instanciar a classe Database
$database = new Database();
$db = $database->connect();

if ($db) {
    echo 'Conectado ao banco de dados com sucesso!';
} else {
    echo 'Falha ao conectar ao banco de dados.';
}
?>