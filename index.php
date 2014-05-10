<?php
//官方文档 http://php.net/manual/zh/book.pdo.php
/*表结构：
CREATE DATABASE `ebook` DEFAULT CHARACTER SET utf8;
USE `ebook`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
*/
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=ebook;charset=utf8';
$user = 'root';
$password = '1';
$db = new PDO($dsn, $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` LIMIT 10';
var_dump($sql);

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$articles = $stmt->fetchAll();
require __DIR__ . '/index.html';
?>
