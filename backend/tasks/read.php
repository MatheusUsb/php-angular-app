<?php
require_once 'db.php';

try {
    $sql = "SELECT id, title, description, status, created_at, updated_at FROM tasks";
    $result = $pdo->query($sql);
    
    if ($result->rowCount() > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Title</th>";
        echo "<th>Description</th>";
        echo "<th>Status</th>";
        echo "<th>Created At</th>";
        echo "<th>Updated At</th>";
        echo "</tr>";
        
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
            echo "<td>" . htmlspecialchars($row['updated_at']) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        // Libera o conjunto de resultados
        unset($result);
    } else {
        echo "No tasks found.";
    }
} catch(PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Fecha a conexão
unset($pdo);
?>