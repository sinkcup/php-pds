<?php
require_once __DIR__ . '/../src/db.php';

$input = $_POST;
$sql = 'INSERT INTO `articles` (`author`, `title`, `content`) VALUES (' . $db->quote($input['author']) . ',' . $db->quote($input['title']) . ',' . $db->quote($input['content']). ');';
var_dump($sql);

$stmt = $db->query($sql);
$id = $db->lastInsertId();
var_dump($id);

if(!empty($id)) {
    $notice = '保存成功';
} else {
    $notice = '出错了';
}
$backUri = './';
require __DIR__ . '/../res/notice.html';
?>
