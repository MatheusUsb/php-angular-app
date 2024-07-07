<?php
require_once 'db.php'; // Inclui o arquivo de conexão

try {
    $sql = "SELECT * FROM tasks"; // Testa a seleção de dados da tabela tasks
    $result = $pdo->query($sql);
    
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            echo "ID: " . $row['id'] . " - Title: " . $row['title'] . "<br>";
        }
    } else {
        echo "No tasks found.";
    }
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);
?>