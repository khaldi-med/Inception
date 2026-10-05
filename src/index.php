<?php
$dsn = "mysql:host=db;dbname=testdb;charset=utf8";
$user = "user";
$pass = "pass";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT content FROM messages");

    echo "<h1>Messages from MySQL</h1><ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars($row['content']) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>

