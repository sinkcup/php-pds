<?php
require_once __DIR__ . '/../src/common.php';
$output = array();
$output['layout'] = 'index';
require_once __DIR__ . '/../src/db.php';

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` LIMIT 10';

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$output['data']['articles'] = $stmt->fetchAll();
output($output);
?>
