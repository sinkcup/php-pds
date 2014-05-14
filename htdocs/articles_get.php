<?php
/**
 * 显示一篇文章。网页、txt多种展现形式。
 */

require_once __DIR__ . '/../src/common.php';
$input = $_GET;
$output = array();
$output['http']['contentType'] = isset($input['contentType']) ? $input['contentType'] : 'text/html';
if(isset($input['isDownload'])) {
    $output['http']['contentDisposition'] = 'attachment; filename=notice.txt';
}

if(!isset($input['id']) || empty($input['id'])) {
    $output['data']['notice'] = '出错了：缺少参数';
    $output['data']['backUri'] = './index.php';
    $output['layout'] = 'notice';
    output($output);
}

require_once __DIR__ . '/../src/db.php';

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` WHERE id=' . $db->quote($input['id']) . ' LIMIT 1';

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$r = $stmt->fetchAll();

if(empty($r)) {
    $output['data']['notice'] = '出错了：查无此文';
    $output['data']['backUri'] = './index.php';
    $output['layout'] = 'notice';
    output($output);
}

$article = $r[0];
$output['data']['article'] = $article;
if(isset($input['isDownload'])) {
    $output['http']['contentDisposition'] = 'attachment; filename=' . $article['id'] . '.txt';
}
$output['layout'] = 'articles_get';
output($output);
?>
