<?php
$input = $_POST;
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=blog;charset=utf8';
$user = 'root';
$password = '1';
$db = new PDO($dsn, $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO `comments` (`blogId`, `nickname`, `content`) VALUES (1,' . '\'' . $input['nickname'] . '\',\'' . $input['content'] . '\');';
var_dump($sql);

$stmt = $db->query($sql);
$id = $db->lastInsertId();
var_dump($id);

if(!empty($id)) {
    $notice = '保存成功';
} else {
    $notice = '出错了';
}
$backUri = './index.php';
require __DIR__ . '/notice.html';
?>
