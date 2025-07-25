<?php
$pdo = new PDO("mysql:host=" . getenv("DB_HOST") . ";dbname=" . getenv("DB_NAME"), getenv("DB_USER"), getenv("DB_PASS"));

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->execute([$_POST["nome"], $_POST["email"]]);
    header("Location: /");
    exit;
} else {
    header('Content-Type: application/json');
    echo json_encode($pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC));
}
