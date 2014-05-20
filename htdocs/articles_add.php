<?php
require_once __DIR__ . '/../src/common.php';
require_once __DIR__ . '/../src/db.php';
$input = $_POST;

$author = trim($input['author']);
$title = trim($input['title']);

//HTTP协议中规定用\r\n，所以无论用户输入什么，各个浏览器都会转换成\r\n再提交到服务器，而服务器主流为Linux，所以需要替换。
//参考http://bugs.jquery.com/ticket/6876
$content = str_replace(array("\r\n", "\r"), array("\n", "\n"), $input['content']);

//Linux认为每行文本后面都必须有换行符，服务器以Linux为准，所以要补上。
//只能使用rtrim，而不能使用trim，因为txt段落开头可能有缩进，比如汉字是每段开始空两个字。
$content = rtrim($content) . "\n";

$sql = 'INSERT INTO `articles` (`author`, `title`, `content`) VALUES (' . $db->quote($author) . ',' . $db->quote($title) . ',' . $db->quote($content). ');';

$stmt = $db->query($sql);
$id = $db->lastInsertId();

$output['data']['notice'] = empty($id) ? '出错了' : '保存成功';
$output['data']['backUri'] = './';
output($output);
?>
