<?php
require_once 'db.php';

// Verifica se title e description foram enviados e não estão vazios
if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    try {
        $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        
        $stmt->execute();
        
        echo "Nova tarefa criada com sucesso.";
    } catch(PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
} else {
    echo "ERROR: Title cannot be null.";
}

unset($pdo);
?>