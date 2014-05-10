<?php
$input = $_GET;
if(!isset($input['id']) || empty($input['id'])) {
    $notice = '出错了：缺少参数';
    $backUri = './index.php';
    require __DIR__ . '/notice.html';
    exit;
}

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=ebook;charset=utf8';
$user = 'root';
$password = '1';
$db = new PDO($dsn, $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` WHERE id=' . $input['id'] . ' LIMIT 1';
var_dump($sql);

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$r = $stmt->fetchAll();

if(empty($r)) {
    $notice = '出错了：查无此文';
    $backUri = './index.php';
    require __DIR__ . '/notice.html';
    exit;
}

$article = $r[0];
require __DIR__ . '/articles_get.html';
exit;
?>
