<?php
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

try {
    $mysqli = new mysqli($host, $usuario, $senha, $database);
    if ($mysqli->connect_error) {
        throw new Exception("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>