<?php
require_once __DIR__ . '/../src/db.php';

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` LIMIT 10';

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$articles = $stmt->fetchAll();
require __DIR__ . '/../res/index.html';
?>
