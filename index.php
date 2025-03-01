<?php
include 'db.php';

try {
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($results);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
