<?php
//官网文档 http://php.net/manual/zh/book.pdo.php
/*表结构：
CREATE DATABASE `blog` DEFAULT CHARACTER SET utf8;
USE `blog`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blogId` int(10) unsigned NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `content` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
*/
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=blog;charset=utf8';
$user = 'root';
$password = '1';
$db = new PDO($dsn, $user, $password);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT `blogId`, `nickname`, `content` FROM `comments` WHERE blogId=1 LIMIT 10';
var_dump($sql);

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$comments = $stmt->fetchAll();
require __DIR__ . '/index.html';
?>
