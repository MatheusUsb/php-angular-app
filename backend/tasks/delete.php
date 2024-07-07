<?php
require_once 'db.php';

$id = $_GET['id']; // Ou $_POST['id'], dependendo do seu método de envio

try {
    $sql = "DELETE FROM tasks WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    $stmt->execute();
    
    echo "Tarefa deletada com sucesso.";
} catch(PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);
?>