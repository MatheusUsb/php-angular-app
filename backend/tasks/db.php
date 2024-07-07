<?php
$host = 'localhost';
$dbname = 'user_system'; // Nome do banco de dados atualizado
$username = 'root'; // Usuário padrão do XAMPP
$password = ''; // Senha padrão do XAMPP é vazia

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>