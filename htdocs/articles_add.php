<?php
require_once __DIR__ . '/../src/common.php';
require_once __DIR__ . '/../src/db.php';
$input = $_POST;
$output = array();
$output['layout'] = 'notice';

$sql = 'INSERT INTO `articles` (`author`, `title`, `content`) VALUES (' . $db->quote($input['author']) . ',' . $db->quote($input['title']) . ',' . $db->quote($input['content']). ');';

$stmt = $db->query($sql);
$id = $db->lastInsertId();

$output['data']['notice'] = empty($id) ? '出错了' : '保存成功';
$output['data']['backUri'] = './';
output($output);
?>
