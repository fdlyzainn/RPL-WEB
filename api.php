<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$pdo = new PDO('mysql:host=localhost;dbname=fashion;charset=utf8mb4', 'root', '');

$route = $_GET['action'] ?? '';

if ($route === 'products') {
    $stmt = $pdo->query("SELECT * FROM products ORDER BY number_sold DESC");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}