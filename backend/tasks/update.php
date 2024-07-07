<?php
require_once 'db.php';

if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $currentDateTime = date('Y-m-d H:i:s'); // Data e hora atuais

    try {
        $sql = "UPDATE tasks SET title = :title, description = :description, status = :status, updated_at = :updated_at WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':updated_at', $currentDateTime);
        
        $stmt->execute();
        
        echo "Tarefa atualizada com sucesso.";
    } catch(PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
} else {
    echo "ERROR: All fields are required.";
}

unset($pdo);
?>